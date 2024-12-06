<?php
include '../classes/dbh.classes.php';
include '../classes/showProduct.classes.php';
include '../classes/editProduct-contr.classes.php';

if(isset($_POST['submit'])){

$id=filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
$title=htmlspecialchars($_POST["title"],ENT_QUOTES,'UTF-8');
$body=htmlspecialchars($_POST["body"],ENT_QUOTES,'UTF-8');
$keyword1=htmlspecialchars($_POST["keyword1"],ENT_QUOTES,'UTF-8');
$keyword2=htmlspecialchars($_POST["keyword2"],ENT_QUOTES,'UTF-8');
$keyword3=htmlspecialchars($_POST["keyword3"],ENT_QUOTES,'UTF-8');
$keyword4=htmlspecialchars($_POST["keyword4"],ENT_QUOTES,'UTF-8');
$is_featured=filter_var($_POST['is_featured'],FILTER_SANITIZE_NUMBER_INT);
$thumbnail1=$_FILES['thumbnail1'];
$thumbnail2=$_FILES['thumbnail2'];
$thumbnail3=$_FILES['thumbnail3'];
$thumbnail4=$_FILES['thumbnail4'];


$newproduct=new EditProduct($id);
$newproduct->updateProductContr($title,$body,$thumbnail1,$keyword1,$thumbnail2,$keyword2,$thumbnail3,$keyword3,$thumbnail4,$keyword4,$is_featured);
var_dump($newproduct);

$_SESSION['edit_post']='محصول مورد نظر با موفقیت ثبت شد';

header("location:../manage/profile");
}