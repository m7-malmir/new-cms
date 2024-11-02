<?php

if(isset($_POST['submit'])){

    //grab link to data
    $uid=htmlspecialchars($_POST['uid'],ENT_QUOTES,'UTF-8');
    $pwd=htmlspecialchars($_POST['pwd'],ENT_QUOTES,'UTF-8');


     //instantiate signup contr class
     include "../classes/dbh.classes.php";
     include "../classes/login.classes.php";
     include "../classes/login-contr.classes.php";
     $login=new LoginContr($uid,$pwd);
     //runnig error handler
     $login->loginUser();
     //going to back to front page
       $_SESSION['succ-login']='ورود شما با موفقیت انجام شد';
    header("location:../manage/profile");


} 