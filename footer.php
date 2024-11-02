<footer class="footer">
    <div class="container footer__container">
      <div class="footer__1">
        <h4>باما در تماس باشید</h4>
            <div>
                <p>آدرس کارخانه: استان البرز-شهرستان کرج-چهارباغ-اقدسیه-خیابان دهیاری-مجتمع مرسل قالب-سوله شماره 9</p>
                <div class="">شماره کارخانه :<a href="tel:02634251129">34251129-026</a></div>
                <div>موبایل : <a href="tel:09121857214">09121857214</a></div>
                <div>موبایل : <a href="tel:09121783044">09121783044</a></div>
            </div>
    </div><!--footer__1-->
        <div class="footer__2">
            <h4>لینک ها</h4>
            <ul class="permalinks">
                <li> <a href="<?= ROOT_URL ?>index.php">خانه </a></li>
                <li> <a href="<?= ROOT_URL ?>about.php">درباره ما</a></li>
                <li> <a href="<?= ROOT_URL ?>contact.php">تماس باما</a></li>
             </ul>
        </div><!--footer__2-->
        <div class="footer__3">
          <h4>privacy</h4>
          <ul class="privacy">
              <li> <a href="#">privacy policy</a></li>
              <li> <a href="#">terms and condition</a></li>
              <li> <a href="#">refund policy</a></li>
              <li> <a href="#">help us to improve</a></li>
           </ul>
      </div><!--footer__3-->
        <div class="footer__4">
            <h4>باما در تماس باشید</h4>
            <div>
                <p>آدرس دفتر فروش: تهران سید خندان ابتدای خیابان کابلی پلاک ۱۰ واحد ۹</p>
            </div>
            <ul class="footer__socials">
                <li> <a href="https://instagram.com/subasayesh?igshid=OGQ5ZDc2ODk2ZA=="><i class="uil uil-instagram"></i></a></li>
                <li> <a href="#"><i class="uil uil-whatsapp"></i></a></li>
                <li> <a href="https://t.me/+989215239854"><i class="uil uil-telegram"></i></a></li>
                
             </ul>
        </div><!--footer__4-->
       
    </div><!--container footer__container-->
    <div class="footer__copyright">Copyright &copy; Design7</div>
</footer>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?= ROOT_URL ?>./js/main.js"></script>
<script>

    var swiper = new Swiper(".mySwiper",{
        slidesPerView:1,
        spaceBetween:30,
        pagination:{
            el:".swiper-pagination",
            clickable:true,
        },
        breakpoints:{
            600:{
                slidesPerView:2,
            }
        }
    });
</script>
<script>
  AOS.init();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yekan-font@1.0.0/css/yekan-font.min.css">