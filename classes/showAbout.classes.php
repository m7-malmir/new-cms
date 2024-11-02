<?php
require_once 'dbh.classes.php';
class ShowAbout extends Dbh{
    protected function getAboutInfo(){
        $stmt=$this->connect()->prepare("SELECT * FROM `about`");
        $stmt->execute();
        $row=$stmt->fetchAll();
        return $row;
    }
    protected function setNewContactInfo($titleabout,$bodycontact){
        $stmt=$this->connect()->prepare('UPDATE `about` SET `title`=?,`descrip`=?;');
        if(!$stmt->execute(array($titleabout,$bodycontact))){
            $stmt= null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }
        $stmt=null;     
    }
}    