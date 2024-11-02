<?php require_once 'up-header.php'; ?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="سوباسایش, subasayesh,  تماس با سوبا سایش" />
    <meta name="description" content="سوباسایش تولید کننده ابزار سایش">
    <title>تماس با ما </title>
<?php
require_once 'header.php';
?>
<section class="contact">
    <div class="container contact contact__container">
        <aside class="contact__aside">
            <div class="aside__image">
                <img src="./img/23.jpg" alt="">
            </div>
            <h2 class="text-start">تماس با ما</h2>
            <p>
              
            </p>
            <ul class="contact__details">
                <li>
                    <i class="uil uil-phone-times"></i>
                     <div>موبایل : <a href="tel:+989190336311">09190336311</a></div>
                </li>
                <li>
                <i class="uil uil-envelope-alt"></i>
                    <h6>taminsayeshalborz@gmail.com</h6>
                </li>
                <li>
                    <i class="uil uil-location-point"></i>
                    <h5>البرز کرج</h5></li>
                
            </ul>
            <ul class="contact__socials">
                <li> <a href="https://instagram.com/subasayesh?igshid=OGQ5ZDc2ODk2ZA=="><i class="uil uil-instagram"></i></a></li>
                <li> <a href="https://t.me/+989215239854"><i class="uil uil-telegram"></i></a></li>
                <li> <a href="#"><i class="uil uil-whatsapp"></i></a></li>
             </ul>
        </aside><!--contact__aside-->

        <form action="https://formspree.io/f/mnqypldd" method="POST" class="contact__form">
            <div class="form__name">
                <input type="text" name="first name" placeholder="نام">
                <input type="text" name="last name" placeholder="نام خانوادگی">
            </div><!--form__name-->
            <input type="" name="email address" placeholder="ایمیل شما" required>
            <textarea name="message" id="" placeholder="Mwssage"  rows="7" required></textarea>
            <button type="submit" class="btn btn-primary">ارسال پیام</button>
        </form>

    </div><!--container contact contact__container-->
</section><!--contact-->
<?php 
require_once 'footer.php';
?>