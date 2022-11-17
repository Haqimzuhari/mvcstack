<?php

class Database
{
    public $sql, $query_error, $last_insert_id;
    protected $connection, $table_name;
    protected $current_row = [];
    protected $where_clause = "", $order_clause = "";
    private $create_column_value = [], $update_column_value = [];
    private $relatedMethods, $getRelationshipFlag = false;

    public function connect()
    {
        $connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($connection) {
            $this->connection = $connection;
            $this->relatedMethods = $this->getAllRelationshipMethods();
        } else {
            dd((ENV == 'development') ? mysqli_connect_error() : "403: Forbidden");
        }
    }

    public function query() 
    {
        $query = false;

        if ($this->connection) {
            $query = @mysqli_query($this->connection, $this->sql);
            $this->query_error = mysqli_error($this->connection);
        }

        return $query;
    }

    private function sqlGen($type)
    {
        if (in_array($type, ['select', 'first'])) {
            $this->sql = "SELECT * FROM `$this->table_name`";
            $this->sql .= (empty($this->where_clause)) ? "" : " WHERE $this->where_clause";
            $this->sql .= (empty($this->order_clause)) ? "" : " ORDER BY $this->order_clause";
            $this->sql .= ($type == "first") ? " LIMIT 1" : "";
        }

        if (in_array($type, ['insert'])) {
            $this->sql = "INSERT INTO `$this->table_name`";

            $columns = "(";
            $values = "(";
            foreach ($this->create_column_value as $column => $value) {
                $columns .= "`$column`, ";
                $values .= "'$value', ";
            }
            $columns = rtrim(trim($columns), ',') . ")";
            $values = rtrim(trim($values), ',') . ")";

            $this->sql .= " $columns VALUES $values";
        }

        if (in_array($type, ['update'])) {
            $this->sql = "UPDATE `$this->table_name` SET";

            $sets = "";
            foreach ($this->update_column_value as $column => $value) {
                $sets .= "`$column` = '$value', ";
            }
            $sets = rtrim(trim($sets), ',');

            $this->sql .= " $sets";
            $this->sql .= (empty($this->where_clause)) ? "" : " WHERE $this->where_clause";
        }

        if (in_array($type, ['delete'])) {
            $this->sql = "DELETE FROM `$this->table_name`";
            $this->sql .= (empty($this->where_clause)) ? "" : " WHERE $this->where_clause";
        }
    }

    public function get() {
        $this->sqlGen("select");
        
        $rows = [];
        $query = $this->query();
        if ($query) {
            if ($query->num_rows > 0) {
                $rows = [];
                while ($row = mysqli_fetch_assoc($query)) {
                    if (!$this->getRelationshipFlag) {
                        $this->current_row = $row;
                        $this->getRelationship();
                        $rows[] = (object)$this->current_row;
                        $this->current_row = [];
                    } else {
                        $rows[] = (object)$row;
                    }
                }
            }
        }

        return $rows;
    }

    public function first() {
        $this->sqlGen("first");
        
        $row = [];
        $query = $this->query();
        if ($query) {
            if ($query->num_rows > 0) {
                $row = mysqli_fetch_assoc($query);
                if (!$this->getRelationshipFlag) {
                    $this->current_row = $row;
                    $this->getRelationship();
                    $row = (object)$this->current_row;
                    $this->current_row = [];
                }
            }
        }
        return $row;
    }

    private function getRelationship()
    {
        if ($this->relatedMethods) {
            foreach ($this->relatedMethods as $method) {
                if (!isset($this->current_row[$method])) {
                    $this->getRelationshipFlag = true;
                    $this->current_row[$method] = (object)$this->{$method}();
                    $this->getRelationshipFlag = false;
                }
            }
        }
    }

    public function save()
    {
        $this->sqlGen('update');dd($this->sql);
        return ($this->query()) ? true : false;
    }

    public function create($column_value) 
    {
        $this->create_column_value = $column_value;
        $this->sqlGen('insert');
        if ($this->query()) {
            $this->last_insert_id = mysqli_insert_id($this->connection);
            return true;
        }
        return false;
    }

    public function update($column_value) 
    {
        $this->update_column_value = $column_value;
        return $this;
    }

    public function delete() 
    {
        $this->sqlGen('delete');dd($this->sql);
        return ($this->query()) ? true : false;
    }

    public function where($column, $value)
    {
        if (!empty($column) and !empty($value)) $this->where_clause .= (empty($this->where_clause)) ? "`$column` = '$value'" : " AND `$column` = '$value'";
        return $this;
    }

    public function whereOr($column, $value)
    {
        if (!empty($column) and !empty($value)) $this->where_clause .= " OR `$column` = '$value'";
        return $this;
    }

    public function orderBy($column, $order) 
    {
        if (!empty($column) and !empty($order)) $this->order_clause .= (empty($this->order_clause)) ? "`$column` $order" : ", `$column` $order";
        return $this;
    }

    public function table($table)
    {
        if (!empty($table)) $this->table_name = $table;
        return $this;
    }

    private function getAllRelationshipMethods()
    {
        $class = get_class($this);
        $all_methods = get_class_methods($class);
        $exclude_methods = ['__construct', 'hasOne', 'hasMany', 'connect', 'query', 'sqlGen', 'get', 'first', 'getAllRelationshipMethods', 'getRelationship', 'save', 'create', 'update', 'delete', 'where', 'whereOr', 'orderBy', 'table'];

        $methods = [];
        foreach ($all_methods as $method) {
            if (!in_array($method, $exclude_methods)) $methods[] = $method;
        }

        return $methods;
    }
}