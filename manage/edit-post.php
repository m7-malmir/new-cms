<?php

include './header.php';
require_once '../classes/showdetail.classes.php';
if(isset($_GET['id'])){
$id=filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
$ok=new ShowDetail;
$fo=$ok->getDetailProductInfo($id);
foreach ($fo as $key => $post) :
// }else{
//     header('location:' .ROOT_URL. 'admin/');
//     die();
// }

?>
<section class="sign-in">
<div class="container-login">
<?php //if(isset($_SESSION['edit-post'])) : ?>
<!-- <p class="alert">

</p> -->
<?php //endif ?>
    <h3>ویرایش پست</h3>
    <form action="<?= ROOT_URL ?>includes/posts.inc.php" method="post" enctype="multipart/form-data" class="contact__form">
    <div class="form__name">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
    </div>
    <div class="form__name">  
    </div>
    <div class="form__name">
    <input type="text" value="<?= $post['title'] ?>" name="title" placeholder="<?= $post['title'] ?>"><br/>
    </div>
    <div class="form__name">
    <textarea rows="4" name="body" cols="50" placeholder="توضیحات"><?= $post['body'] ?></textarea><br/>
    </div>
    <input type="submit" name="submit" value="ثبت ویرایش"><br/> 
    </form>
    </div>
</section>
<?php
endforeach;
}
include('../footer.php');
?>