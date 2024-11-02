<?php
require_once 'dbh.classes.php';
class ShowPost extends Dbh{
    protected function getProductInfo(){
        $stmt=$this->connect()->prepare("SELECT * FROM `product`");
        $stmt->execute();
        $row=$stmt->fetchAll();
        return $row;
    }
    protected function setNewPost($posttitle,$postcontent,$id){
        $stmt=$this->connect()->prepare('UPDATE `product` SET `title`=?,`body`=? WHERE `id`=?;');
        if(!$stmt->execute(array($posttitle,$postcontent,$id))){
            $stmt= null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }
        $stmt=null;   
    }
}    