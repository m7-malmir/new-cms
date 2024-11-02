<?php

include './header.php';

require_once '../classes/showAbout.classes.php';
require_once '../classes/showAbout-contr.classes.php';


?>
<section class="sign-in">
<div class="container-login">
<?php //if(isset($_SESSION['edit-post'])) : ?>
<!-- <p class="alert">

</p> -->
<?php 
  $f=new ShowAboutContr();
  $ok=$f->showAbout();
 //print_r($ok);
 ?>
    <form action="<?= ROOT_URL ?>includes/contact.inc.php" method="post"  class="contact__form">
        <h4>عنوان اصلی</h4>
        <div class="form__name">
    <input type="text" value="<?= $ok[0]['title'] ?>" name="title" placeholder="عنوان محصول"><br/>
    </div>
    
    <h4>توضیحات درباره شرکت</h4>
    <div class="form__name">
    <textarea rows="10" name="body" cols="140" placeholder="توضیحات"><?= $ok[0]['descrip'] ?></textarea><br/>
    </div>
    <input type="submit" name="submit" value="ثبت نهایی ویرایش"><br/> 
    </form>
    </div>
</section>
<?php

include('../footer.php');
?>