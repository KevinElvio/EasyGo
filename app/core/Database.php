<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    // Database handler
    private $dbh ;
    // Database statement
    private $stmt;

    public function __construct() {
        // Source
        $dsn = 'mysql:host='. $this->host .';dbname='. $this->db_name;

        $option=[
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        $dsn = 'mysql:host=localhost;dbname=EasyGo';
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        }
        catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($params, $value, $type = null)
    {
        if (is_null($type))
        {
            switch (true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_float($value):
                    $type = PDO::PARAM_FLOAT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                
            }
        }

        $this->stmt->bindValue($params, $value, $type);

    }


}