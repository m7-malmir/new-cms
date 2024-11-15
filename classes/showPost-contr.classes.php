<?php

class ShowPostContr extends ShowPost{
    private $postid;

    public function __construct($postid){
        $this->postid=$postid;
       
    }
    public function showProduct(){
        return $this->getProductInfo();
    }
    public function updatePostInfo($title,$body,$postsrc){
       // $previous_thumbnail_name=filter_var($_POST['previous_thumbnail_name'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //Error handlers
        if($this->emptyInputCheck($title,$body,$postsrc)==true){
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }
        //Update profile info
        $previous_thumbnail_name=filter_var($_POST['previous_thumbnail_name'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($postsrc['name']) {
            if($previous_thumbnail_path){
                unlink($previous_thumbnail_path);
            }
        $time=time();
        $thumbnail_name=$time . $postsrc['name'];
        $thumbnail_tmp_name=$postsrc['tmp_name'];
        $thumbnail_destination_path='../img/'.$thumbnail_name;
        //make sure file an image
        $allow_file=['jpg','png','jpeg'];
        $extention=explode('.',$thumbnail_name);
        $extention=end($extention);
        if (in_array($extention,$allow_file)) {
           if ($postsrc['size']<1000000) {
            ///upload
            move_uploaded_file($thumbnail_tmp_name,$thumbnail_destination_path);
           }else{
            $_SESSION['edit-post']='file too  big, shoud be less than 1mb ';
           }
        }else{
            $_SESSION['edit-post']='file shoude be jpg,png or jpeg format ';
        }
       }
       
        $this->setNewPost($title,$body,$postsrc,$this->postid);
       }
       private function emptyInputCheck($introtitle,$introtext,$introsrc){
        $result='';
        if( empty($introtitle) || empty($introtext) || empty($introsrc)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
       }
}
