<?php
include "../classes/dbh.classes.php";
include '../classes/showProduct.classes.php';
include '../classes/showProduct-contr.classes.php';

if(isset($_SESSION["useruid"])){
    //echo $_SESSION["useruid"];
}
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style-admin.css">
</head>
<body>
<nav>
    <div class="container nav__container">
        <a href="<?= ROOT_URL ?>manage/profile"><h4>پنل مدیریت</h4></a>
        <ul class="nav__menu">
            <li><a href="<?= ROOT_URL ?>home"><h4>خانه</h4></a></li>
            <li><a href="<?= ROOT_URL ?>about"><h4>درباره ما</h4></a></li>
            <li><a href="<?= ROOT_URL ?>home"><h4>پست ها</h4></a></li>
            <li><a href="<?= ROOT_URL ?>contact"><h4>تماس با ما</h4></a></li>
            <?php if(isset($_SESSION['useruid'])) : ?>
            <li class="nav__profile">
                <div class="avatar">
                    <img src="<?= ROOT_URL .'/img/amini.jpg'?>" alt="">
                </div>
                <ul id="hidden">
                    <li>آقای امینی</li>
                    <li><a href="<?= ROOT_URL ?>includes/logout.inc.php">خروج</a></li>
                </ul>  
            </li>
                <?php else : ?>
            <li><a href="<?= ROOT_URL ?>signin.php"><h4>Sign in</h4></a></li>
           <?php endif ?>
          </ul>
          <button id="open-menu-btn"><i class="uil uil-bars"></i></btn>
          <button id="close-menu-btn"><i class="uil uil-multiply"></i></btn>
    </div>

</nav><!--end of nav-->