<?php

namespace MVC\core;

use PDO;

class model{

    private $dbname=DB_NAME;
    private $dbpass=DB_PASS;
    private $dbhost=DB_HOST;
    private $dbuser=DB_USER;

    private $conn;
    private $statment;

    public function __construct(){
        try {
            $dsn="mysql:host=".$this->dbhost.";dbname=".$this->dbname;
            $this->conn=new \PDO($dsn,$this->dbuser,$this->dbpass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected successfully";

        }catch(PDOException $e){
            echo "connection failed:".$e->getMessage();
        }
    }

    public function query($sql){
        $this->statment=$this->conn->prepare($sql);
    }

    public function bindValues($parameter,$value,$type="null"){
        switch (is_null($type)){
            case is_int($value):
                $type=PDO::PARAM_INT;
            case is_null($value):
                $type=PDO::PARAM_NULL;
            case is_bool($value):
                $type=PDO::PARAM_BOOL;
            default:
                $type=PDO::PARAM_STR;
        }
        $this->statment->bindValue($parameter,$value,$type);

    }

    public function execute(){
        return $this->statment->execute();
    }
    public function getAllData(){
        $this->execute();
        return $this->statment->fetchall(PDO::FETCH_OBJ);
    }
    public function getOneData(){
        $this->execute();
        return $this->statment->fetch(PDO::FETCH_OBJ);
    }

    public function rowCount(){
        return $this->statment->rowCount();
    }



}