<?php
require_once 'dbh.classes.php';
class ShowDetail extends Dbh{
    public function getDetailProductInfo($id){
        //if(isset($_GET['pr'])){
        //$id=filter_var($_GET['pr'],FILTER_SANITIZE_NUMBER_INT);
        $stmt=$this->connect()->prepare("SELECT * FROM `product` where id=? ");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $row=$stmt->fetchAll();
        return $row;
        //}
    }
}
