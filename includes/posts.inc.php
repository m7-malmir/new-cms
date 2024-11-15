<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // var_dump($_POST);
    // die();
    $id=filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    $title=htmlspecialchars($_POST["title"],ENT_QUOTES,'UTF-8');
    $body=htmlspecialchars($_POST["body"],ENT_QUOTES,'UTF-8');
    $postsrc=$_FILES['postsrc'];
    $previous_thumbnail_name=filter_var($_POST['previous_thumbnail_name'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    include '../classes/dbh.classes.php';
    include '../classes/showPost.classes.php';
    include '../classes/showPost-contr.classes.php';
    $profileinfo=new ShowPostContr($id);
    $profileinfo->updatePostInfo($title,$body, $postsrc);
    $_SESSION['edit_post']='پست مورد نظر با موفقیت ویرایش شد';


    header("location:../manage/profile");
}