<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<?php $this->view('base/head'); ?>
<body>
  <!-- banner & header section -->
  <div class="main">
    <!-- header -->
    <?php $this->view('landing-page/header'); ?>
    <!-- //header -->
    <!-- banner -->
    <?php $this->view('landing-page/banner'); ?>
    <!-- //banner -->
  </div>
  <!-- banner & header section -->
  <!-- services -->
    <?php $this->view('landing-page/layanan'); ?>
  <!-- //services -->
  <!-- services -->
    <?php $this->view('landing-page/sparepart'); ?>
  <!-- //services --> 
  <!-- services -->
    <?php $this->view('landing-page/cara-kerja'); ?>
  <!-- //services --> 
  <!-- contact -->
    <?php $this->view('landing-page/kontak'); ?>
  <!-- //contact -->
  <!-- Modal Masuk -->
  <?php $this->view('landing-page/masuk'); ?>
  <!--//Modal Masuk  -->
  <!-- footer -->
    <?php $this->view('base/footer'); ?>
  <!-- //footer -->
  <!-- Js files -->
  <!-- JavaScript -->
  <script src="assets/js/jquery-2.2.3.min.js"></script>
  <!-- <script src="assets/js/jquery-1.11.3.min.js"></script> -->
  <!-- Default-JavaScript-File -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Necessary-JavaScript-File-For-Bootstrap -->

  <!--banner-slider-->
  <script src="assets/js/JiSlider.js"></script>
  <script>

      $('#JiSlider').JiSlider({
        color: '#fff',
        start: 3,
        reverse: true
      }).addClass('ff')
  </script>
  <!-- //banner-slider -->

  <!-- smooth scrolling -->
  <script src="assets/js/SmoothScroll.min.js"></script>
  <!-- //smooth scrolling -->

  <!-- move-top -->
  <script src="assets/js/move-top.js"></script>
  <!-- easing -->
  <script src="assets/js/easing.js"></script>
  <!--  necessary snippets for few javascript files -->
  <script src="assets/js/car_services.js"></script>
  <!-- banner text -->
  <script src="assets/js/text.js"></script>
  <!-- menu -->
  <script src="assets/js/menu.js"></script>
  <!-- lightbox -->
  <script src="assets/js/smoothbox.jquery2.js"></script>

  <!-- testimonials -->
  <!-- required-js-files-->
  <link href="assets/css/owl.carousel.css" rel="stylesheet">
  <script src="assets/js/owl.carousel.js"></script>
  <script>
    $(document).ready(function () {
      $("#owl-demo").owlCarousel({
        items: 1,
        lazyLoad: true,
        autoPlay: false,
        navigation: true,
        navigationText: true,
        pagination: true,
      });
      $(".delay-show").show();
    });
  </script>
  <!-- //required-js-files-->
  <!-- //Js files -->

</body>

</html>