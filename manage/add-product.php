<?php
include './header.php';
if(isset($_SESSION["useruid"] )){
?>
<section class="sign-in"> 
    <div class="container-login">
        <h3>افزودن محصول</h3>
        <?php if (isset($_SESSION['add-post'])) : ?>
          <p class="alert">
            <?= 
                $_SESSION['add-post']; 
                unset($_SESSION['add-post']);
            ?>
          </p>
          <?php endif ?>

 <?php if (isset($_SESSION['error'])) {
  
    echo "<p class='su-alert'>";
    echo htmlspecialchars($_SESSION['error']);
    echo "</p>";
    unset($_SESSION['error']);
}
?> 
        <form action="<?= ROOT_URL ?>includes/addpr.inc.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="نام کالا"><br/>
        <textarea rows="4" cols="50" name="body" placeholder="محتوای مربوط به کالا ..."></textarea><br/>
        <input type="checkbox" name="is_featured" id="is_featured" value="1" checked>
        <label for="is_featured">در ابتدای همه محصولات نمایش داده شود</label><br>

          <div class="row">
            <div class="col-md-6">
              <p>تصویر اصلی محصول</p>
              <input type="file" name="thumbnail1" id="thumbnail1">
            </div>
            <div class="col-md-6">
              <p>کلمه کلیدی مرتبط با تصویر اصلی</p>
              <input type="text" placeholder="کلمه کلیدی اول, کلمه کلیدی دوم, کلمه کلیدی سوم" name="keyword1" id="">
            </div>
          </div><!--row-->

          <div class="row">
            <div class="col-md-6">
            <p>تصویر دوم محصول</p>
            <input type="file" name="thumbnail2" id="thumbnail2">
            </div>
            <div class="col-md-6">
              <p>کلمه کلیدی مرتبط با تصویر دوم</p>
              <input type="text" name="keyword2" id="">
            </div>
          </div><!--row-->
          <div class="row">
            <div class="col-md-6">
            <p>تصویر سوم محصول</p>
            <input type="file" name="thumbnail3" id="thumbnail3">
            </div>
            <div class="col-md-6">
              <p>کلمه کلیدی مرتبط با تصویر سوم</p>
              <input type="text" name="keyword3" id="">
            </div>
          </div><!--row-->
          <div class="row">
            <div class="col-md-6">
            <p>تصویر چهارم محصول</p>
            <input type="file" name="thumbnail4" id="thumbnail4">
            </div>
            <div class="col-md-6">
              <p>کلمه کلیدی مرتبط با تصویر چهارم</p>
              <input type="text" name="keyword4" id="">
            </div>
          </div><!--row-->

        
        
        
        <input type="submit" name="submit" value="Add Post"><br/>   
        </form> 
    </div>
</section>
<?php
}
include('../footer.php');
?>