<?php

class ShowPostContr extends ShowPost{
    private $postid;
    public function __construct($postid){
        $this->postid=$postid; 
    }
    public function showProduct(){
        return $this->getProductInfo();
    }
    public function updatePostInfo($title,$body){
              //Error handlers
              if($this->emptyInputCheck($title,$body)==true){
                header("location: ../profilesettings.php?error=emptyinput");
                exit();
            }
            //Update profile info
            $this->setNewPost($title,$body,$this->postid);
       }
       private function emptyInputCheck($introtitle,$introtext){
        $result='';
        if( empty($introtitle) || empty($introtext)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
       }
}
//change commit
