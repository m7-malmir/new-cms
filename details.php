<?php require_once './up-header.php'; ?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="keyword1, keyword2, keyword3" />
    <meta name="description" content="">
    <title>جزییات محصول </title>
<?php 
require_once './header.php';
require_once './classes/showdetail.classes.php';
if(isset($_GET['pr'])){
$id=filter_var($_GET['pr'],FILTER_SANITIZE_NUMBER_INT);
$ok=new ShowDetail;
$fo=$ok->getDetailProductInfo($id);
foreach ($fo as $key => $post) { 
?>
<section class="container-fluid ">
        <div class="row d-flex align-items-center detail">
        <div dir="ltr" class="col-md-5  text-center ">
            <div class="col-md-6">
                <img class="img-fluid1" src="<?= ROOT_URL ?><?= $post['src1'] ?>" alt="<?= $post['key1'] ?>">
            </div>
            <!-- <div class="col-md-6">
                <img src="./img/<?= $post['src2'] ?>" alt="<?= $post['key2'] ?>">
            </div>
            <div class="col-md-6">
                <img src="./img/<?= $post['src3'] ?>" alt="<?= $post['key3'] ?>">
            </div>
            <div class="col-md-6">
                <img src="./img/<?= $post['src4'] ?>" alt="<?= $post['key4'] ?>">
            </div> -->
            </div>

            <div class="col-md-7 text-right">
            <h1 ><?= $post['title'] ?></h1>
            <p class="w-75"><?=  $post['body'] ?>
        </p>
            </div>

        
            
            
        </div><!--main-card-->
    </section><!--container header__container-->
    <?php 
   }
 }else{
        header('location: '.ROOT_URL.'index.php');
        die();
    }
    require_once './footer.php';
    
    ?>