<?php

class Database
{
    private $connection=false;

    public $currentQuery=null;
    public $lastInsertId=null;
    
    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($connection == true) {
            $this->connection = $connection;
        }else {
            if(ENV == 'dev') {
                dd(mysqli_connect_error());
            }else {
                Response::set_statusCode(403);
                dd('403: Forbidden');
            }
        }
    }

    public function query($query) {
        $this->currentQuery = $query;
        if($this->connection != false) {
            $quering = @mysqli_query($this->connection, $query);
            if($quering == true) {
                $this->lastInsertId = @mysqli_insert_id($this->connection);
                return true;
            }else {
                if(ENV == 'dev') {
                    dd(mysqli_error($this->connection));
                }else {
                    return false;
                }
            }
        }else {
            return false;
        }
    }

    public function select($query) {
        $this->currentQuery = $query;
        if($this->connection != false) {
            $result = @mysqli_query($this->connection, $query);
            if(mysqli_num_rows($result) > 0) {
                $rows=[];
                while($row = mysqli_fetch_assoc($result)) {
                    $rows[] = (object)$row;
                }

                return $rows;
            } else {
                return [];
            }
        } else {
            return false;
        }
    }

    public function first($query) {
        $this->currentQuery = $query;
        if($this->connection != false) {
            $result = @mysqli_query($this->connection, $query);
            if(mysqli_num_rows($result) > 0) {
                $rows=[];
                while($row = mysqli_fetch_assoc($result)) {
                    $rows[] = (object)$row;
                }

                return $rows[0];
            } else {
                return [];
            }
        } else {
            return false;
        }
    }

    public function count($query) {
        $this->currentQuery = $query;
        if($this->connection != false) {
            $result = @mysqli_query($this->connection, $query);
            if(mysqli_num_rows($result) > 0) {
                $rows=[];
                while($row = mysqli_fetch_assoc($result)) {
                    $rows[] = (object)$row;
                }

                return count($rows);
            } else {
                return 0;
            }
        } else {
            return false;
        }
    }
}