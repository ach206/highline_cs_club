<?php
 class myPDO {
     private $hostname;
     private $dbname;
     private $username;
     private $password;

  public function connect() {
     $this->hostname = "localhost";
     $this->dbname = "hallAssignmentTwo";
     $this->username = "ach206";
     $this->password = "t3mpword44";
//use this because other files will access
// this file so we want to specify the var
    try{
        $dsn = "mysql:host=".$this->hostname.";dbname=".$this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->password);
        //err message handling
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e) {
        echo "Failed to connect: " .$e->getMessage();
      }

  }// close connect()





} // close myPDO
