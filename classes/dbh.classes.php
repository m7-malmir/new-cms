<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
define('ROOT_URL','http://localhost/amini/');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','amini');
define('DB_CHARSET', 'utf8');
class Dbh{
  public function connect(){
        try {
            $username="root";
            $password="";
            $dbh=new PDO("mysql:host=localhost;dbname=amini",$username,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $dbh;
        } catch (\Throwable $th) {
            print 'Error!: '. $th->getMessage() ."<br/>";
            die();
        }
  }
}

?>