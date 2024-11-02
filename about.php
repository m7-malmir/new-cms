<?php require_once 'up-header.php'; ?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="سوباسایش, subasayesh, درباره ما" />
    <meta name="description" content="سوباسایش تولید کننده ابزار سایش">
    <title>درباره ما </title>
<?php
require_once './header.php';
require_once './classes/showAbout.classes.php';
require_once './classes/showAbout-contr.classes.php';

$f=new ShowAboutContr();
$ok=$f->showAbout();

?>
    <section class="container-fluid ">
        <div class="text-center d-flex flex-column justify-content-center align-items-center mt-5">
              <h1 class="mb-4 mt-2"><?php  print_r($ok[0]['title']); ?></h1>
              <div class="cards mt-3 align-center row d-flex justify-content-center">
              <img style="width:40rem;" src="<?= ROOT_URL ?>img/_DSC0831.jpg" alt="">
              </div>
            <div class="cards mt-3 align-center row d-flex justify-content-center">
            
            <img style="width:20rem;" src="<?= ROOT_URL ?>img/IMG-20231106-WA0000.jpg" alt="">
            <img style="width:20rem;" src="<?= ROOT_URL ?>img/_DSC0856.jpg" alt="">
            </div>
        
          
            <p class="mb-4 mt-5">
            <?php print_r($ok[0]['descrip']); ?>
            </p>

        </div>

    </section>
    <?php 
require_once 'footer.php';
?>