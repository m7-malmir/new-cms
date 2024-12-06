<?php

class LoginContr extends Login{
     private  $uid;  
     private  $pwd; 
     public function __construct($uid,$pwd)
     {
        $this->uid = $uid;
        $this->pwd = $pwd; 
     }
     public function loginUser(){
        if($this->emptyInput()==false){
            //echo "empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            die('Invalid CSRF token.');
        }
       $this->getUser($this->uid,$this->pwd);
     }
     private function emptyInput(){
        $result='';
        if(empty($this->uid) || empty($this->pwd)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
     }
     
}