<?php
include './header.php';

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
        <form action="<?= ROOT_URL ?>admin/add-post-logic.php" enctype="multipart/form-data" method="post">
        <input type="text" name="title" placeholder="نام کالا"><br/>
        <textarea rows="4" cols="50" name="body" placeholder="محتوای مربوط به کالا ..."></textarea><br/>
 
        <input type="checkbox" name="is_featured" id="is_featured" value="1" checked>
        <label for="is_featured">در ابتدای همه محصولات نمایش داده شود</label><br>

        <p>تصویر اصلی محصول</p>
        <input type="file" name="thumbnail1" id="thumbnail1"><br/>
        <p>تصویر دوم محصول</p>
        <input type="file" name="thumbnail2" id="thumbnail2"><br/>
        <p>تصویر سوم محصول</p>
        <input type="file" name="thumbnail3" id="thumbnail3"><br/>
        <input type="submit" name="submit" value="Add Post"><br/>   
        </form> 
    </div>
</section>
<?php
include('../footer.php');
?>