<?php
class Database
{
    public static $connection, $sql, $error, $last_insert_id;
    private static $relationship;
    private static $create_column_value=[], $update_column_value=[];
    protected static $where_clause=null, $order_clause=null;

    public static function connect()
    {
        $connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($connection) {
            self::$connection = $connection;
        } else {
            self::$error = (ENV == 'development') ? mysqli_connect_error() : "403: Forbidden";
        }
    }

    public static function execute($sql)
    {
        self::connect();
        $result = false;
        if (self::$connection) {
            self::$sql = $sql;
            $result = @mysqli_query(self::$connection, $sql);
            self::$error = mysqli_error(self::$connection);
        }

        self::reset();
        return $result;
    }

    public static function all($break=false)
    {
        $sql = self::query_builder('select');
        $result = self::execute($sql);
        $rows = [];
        if ($result and $result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                static::$relationship = self::get_relationship();
                if (count(self::$relationship) > 0 and !$break) {
                    foreach (self::$relationship as $method) {
                        $class = get_called_class();
                        $model = new $class;
                        $model->row = (object)$row;
                        $row[$method] = self::format($model->$method());
                        $rows[] = (object)$row;
                    }
                } else {
                    $rows[] = (object)$row;
                }
            }
        }
        return $rows;
    }

    public static function get($break=false)
    {
        $sql = self::query_builder('select');
        $result = self::execute($sql);
        $rows = [];
        if ($result and $result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                static::$relationship = self::get_relationship();
                if (count(self::$relationship) > 0 and !$break) {
                    foreach (self::$relationship as $method) {
                        $class = get_called_class();
                        $model = new $class;
                        $model->row = (object)$row;
                        $row[$method] = self::format($model->$method());
                        $rows[] = (object)$row;
                    }
                } else {
                    $rows[] = (object)$row;
                }
            }
        }
        return $rows;
    }

    public static function first($break=false)
    {
        $sql = self::query_builder('select');
        $result = self::execute($sql);
        $rows = [];
        if ($result and $result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            static::$relationship = self::get_relationship();
            if (count(self::$relationship) > 0 and !$break) {
                foreach (self::$relationship as $method) {
                    $class = get_called_class();
                    $model = new $class;
                    $model->row = (object)$row;
                    $row[$method] = self::format($model->$method());
                    $rows = (object)$row;
                }
            } else {
                $rows = (object)$row;
            }
        }

        return $rows;
    }

    public static function save()
    {
        $sql = self::query_builder('update');
        return (self::execute($sql)) ? true : false;
    }

    public static function create($column_value) 
    {
        static::$create_column_value = $column_value;
        $sql = self::query_builder('insert');
        if (self::execute($sql)) {
            $id = mysqli_insert_id(self::$connection);
            $class = get_called_class();
            return $class::where('id', $id)->first(true);
        }
        return false;
    }

    public static function update($column_value) 
    {
        static::$update_column_value = $column_value;
        return new static;
    }

    public static function delete() 
    {
        $sql = self::query_builder('delete');
        return (self::execute($sql)) ? true : false;
    }

    public static function where($column, $value)
    {
        if (!empty($column) and !empty($value)) static::$where_clause .= (empty(static::$where_clause)) ? "`$column` = '$value'" : " AND `$column` = '$value'";
        return new static;
    }

    public static function whereOr($column, $value)
    {
        if (!empty($column) and !empty($value)) static::$where_clause .= " OR `$column` = '$value'";
        return new static;
    }

    public static function orderBy($column, $order) 
    {
        if (!empty($column) and !empty($order)) static::$order_clause .= (empty(static::$order_clause)) ? "`$column` $order" : ", `$column` $order";
        return new static;
    }

    private static function query_builder($crud)
    {
        $class = get_called_class();
        $model = new $class;
        $table = $model->table_name;
        $sql = "";
        
        if (in_array($crud, ['select', 'first'])) {
            $sql = "SELECT * FROM `$table`";
            $sql .= (empty(static::$where_clause)) ? "" : " WHERE ".static::$where_clause;
            $sql .= (empty(static::$order_clause)) ? "" : " ORDER BY ".static::$order_clause;
            $sql .= ($crud == "first") ? " LIMIT 1" : "";
        }

        if (in_array($crud, ['insert'])) {
            $sql = "INSERT INTO `$table`";
            $columns = "(";
            $values = "(";
            foreach (static::$create_column_value as $column => $value) {
                $columns .= "`$column`, ";
                $values .= "'$value', ";
            }
            $columns = rtrim(trim($columns), ',') . ")";
            $values = rtrim(trim($values), ',') . ")";
            $sql .= " $columns VALUES $values";
        }

        if (in_array($crud, ['update'])) {
            $sql = "UPDATE `$table` SET";
            $sets = "";
            foreach (static::$update_column_value as $column => $value) {
                $sets .= "`$column` = '$value', ";
            }
            $sets = rtrim(trim($sets), ',');
            $sql .= " $sets";
            $sql .= (empty(static::$where_clause)) ? "" : " WHERE ".static::$where_clause;
        }

        if (in_array($crud, ['delete'])) {
            $sql = "DELETE FROM `$table`";
            $sql .= (empty(static::$where_clause)) ? "" : " WHERE ".static::$where_clause;
        }

        return $sql;
    }

    private static function get_relationship()
    {
        $class = get_called_class();
        $reflection = new ReflectionClass($class);
        $methods = [];
        foreach ($reflection->getMethods() as $method) {
            if ($method->class == $class) {
                $methods[] = $method->name;
            }
        }
        
        return $methods;
    }

    private static function format($result)
    {
        if (is_array($result)) {
            return (count($result) > 0) ? (object)$result : $result;
        } elseif (is_object($result)) {
            return (count((array)$result) > 0) ? $result : (array)$result;
        } else {
            return $result;
        }
    }

    private static function reset()
    {
        self::$where_clause = null;
        self::$order_clause = null;
        self::$create_column_value=[];
        self::$update_column_value=[];
    }
}