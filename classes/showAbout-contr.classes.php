<?php

class ShowAboutContr extends ShowAbout{
    public function __construct(){
        //todo
    }
    public function showAbout(){
        return $this->getAboutInfo();
    }
    public function updateContactInfo($title,$body){
        //Error handlers
        if($this->emptyInputCheck($title,$body)==true){
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }
        //Update profile info
        $this->setNewContactInfo($title,$body);
       }

       private function emptyInputCheck($introtitle,$introtext){
        $result;
        if( empty($introtitle) || empty($introtext)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
       }
}
