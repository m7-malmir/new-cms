<?php
require_once 'dbh.classes.php';
class ShowProduct extends Dbh{
    protected function getProductInfo(){
        $stmt=$this->connect()->prepare("SELECT * FROM `product`");
        $stmt->execute();
        $row=$stmt->fetchAll();
        return $row;
    }
    protected function setNewProduct($prtitle,$prcontent,$prsrc1,$prkey1,$prsrc2,$prkey2,$prsrc3,$prkey3,$id){
        $stmt=$this->connect()->prepare('INSERT INTO `product`(`id`, `title`, `body`, `src1`, `key1`, `src2`, `key2`, `src3`, `key3`, `src4`, `key4`, `is_featured`, `data`) VALUES (?,?,?,?,?,?,?,?,?,?,?);');
        if(!$stmt->execute(array($prtitle,$prcontent,$prsrc1,$prkey1,$prsrc2,$prkey2,$prsrc3,$prkey3,$id))){
            $stmt= null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }
        $stmt=null;   
    }
}    