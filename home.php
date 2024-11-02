<?php require_once 'up-header.php';
//print_r(password_verify());


?>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=" تولید کننده محصولات ساینده, subasayesh" />
    <meta name="description" content="تامین سایش البرز">
    <title> تامین سایش البرز</title>
<?php
require_once 'header.php';
?>
<section class="container">
<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= ROOT_URL ?>img/_DSC0856.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>عنوان محصول</h5>
              <p>توضیحات محصول اول</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?= ROOT_URL ?>./img/_DSC0831.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>عنوان محصول</h5>
                <p>توضیحات محصول اول</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?= ROOT_URL ?>./img/_DSC0830.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>عنوان محصول</h5>
                <p>توضیحات محصول اول</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</header><!--end of header-->
<div class="cards mt-3 align-center row d-flex justify-content-center">
  <div class="text-center m-4"><h2>محبوب ترین محصولات ما</h2></div>
  <?php
  
   
                $f=new ShowProductContr();
                $ok=$f->showProduct();
                foreach($ok as $key=>$val) :
                ?>
                
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500" class="card card-index col-sm-1 col-md-4 col-lg-8 m-3">
                  <img src="<?= ROOT_URL ?><?php echo $val['src1']; ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="dropdown-item" href="#"><?php echo $val['title']; ?></a></h5>
                    <a href="<?= ROOT_URL ?>details?pr=<?php echo $val['id']; ?>/<?php echo str_replace(' ', '-', $val['title']); ?>" class="btn btn-primary">جزییات بیشتر</a>
                  </div>
                </div>
              
                <?php endforeach; ?>
   
</div>
<div class="categories">
       <h2>   با ما بهترین باشید</h2>


</div><!--categories-->
</section><!--container-->

<div  class="mt-3 mb-5 ">
  <h3 class="text-center mb-5">آدرس در نقشه گوگل</h3>
  <div  data-aos="zoom-in" class="map">
    <div class="border border-4 rounded-3">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6465.315108705631!2d50.81796!3d35.881908!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8daf130f141057%3A0xebf2b7d2119181b2!2z2KrYp9mF24zZhiDYs9in24zYtCDYp9mE2KjYsdiy!5e0!3m2!1sen!2snl!4v1689806076919!5m2!1sen!2snl" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  </div>
</div>
<?php 
require_once 'footer.php';
?>
