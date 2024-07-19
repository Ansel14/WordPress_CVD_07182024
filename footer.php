<!-- FOOTER -->
<?php if(!is_page('contact')) {?>  
    <footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__text">
            <ul class="footer__icons">
              <li>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-solid fa-envelope"></i></a>
              </li>
            </ul>
          </div>
          <p>Baloc Road, Brgy, San Ignacio San Pablo City, Laguna 4000</p>
          <p>@CREATIVEVISUALDESIGNS 2022</p>
        </div>
      </div>
    </footer>
<?php }?>

<?php if(is_page('contact')) {?>  
    <!-- FOOTER -->
    <footer class="footer" id="contact__footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__text">
            <ul class="footer__icons">
              <li>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-solid fa-envelope"></i></a>
              </li>
            </ul>
          </div>
          <p>Baloc Road, Brgy, San Ignacio San Pablo City, Laguna 4000</p>
          <p>@CREATIVEVISUALDESIGNS 2022</p>
        </div>
      </div>
    </footer>
<?php }?>

<?php wp_footer() ?>
<script>
    let tl = gsap.timeline();

    tl.from('.header__brand', {opacity: 0, x: '-20px', duration: 2})
    .from('.header__Nav', {opacity: 0, x: '20px', duration: 2})

    let homeBanner = gsap.timeline();
    homeBanner.from('.homeBanner__wrapper', {opacity: 0, yoyo: true , duration: 2})
            .from('.homeBanner__img', {opacity: 0, yoyo: true , duration: 2})
</script>

  </body>
</html>