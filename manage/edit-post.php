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
    <form action="<?= ROOT_URL ?>includes/editpr.inc.php" method="post" enctype="multipart/form-data" class="contact__form">
    
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
            <div class=" d-flex">
            <input type="checkbox" name="is_featured" id="is_featured" value="1" checked>
            <label for="is_featured">در ابتدای همه محصولات نمایش داده شود</label><br>
            </div>


          <div class="row" style="width: 150%;">
            <div class="col-md-3">
              <p>تصویر اصلی محصول</p>
              <input type="file" name="thumbnail1" id="">
            </div>
            <div class="col-md-9">
              <p>کلمه کلیدی مرتبط با تصویر اصلی</p>
              <input value="<?= $post['key1'] ?>" type="text" placeholder="کلمه کلیدی اول, کلمه کلیدی دوم, کلمه کلیدی سوم" name="keyword1" id="">
            </div>

            <div class="col-md-3">
            <p>تصویر دوم محصول</p>
            <input type="file" name="thumbnail2" id="thumbnail2">
            </div>
            <div class="col-md-9">
              <p>کلمه کلیدی مرتبط با تصویر دوم</p>
              <input value="<?= $post['key2'] ?>" type="text" name="keyword2" id="">
            </div>

            <div class="col-md-3">
            <p>تصویر سوم محصول</p>
            <input type="file" name="thumbnail3" id="thumbnail3">
            </div>
            <div class="col-md-9">
              <p>کلمه کلیدی مرتبط با تصویر سوم</p>
              <input value="<?= $post['key3'] ?>" type="text" name="keyword3" id="">
            </div>

            <div class="col-md-3">
            <p>تصویر چهارم محصول</p>
            <input type="file" name="thumbnail4" id="thumbnail4">
            </div>
            <div class="col-md-9">
              <p>کلمه کلیدی مرتبط با تصویر چهارم</p>
              <input value="<?= $post['key4'] ?>" type="text" name="keyword4" id="">
            </div>
          </div><!--row-->
    <input type="submit" name="submit" value="ثبت ویرایش"><br/> 
    </form>
    </div>
</section>
<?php
endforeach;
}
include('../footer.php');
?>