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


  <!-- contact -->
  <div class="contact py-5" id="contact" style="background: url(assets/images/register.jpg) no-repeat center;">
    <div class="container py-xl-5 py-lg-3">
      <h3 class="title text-capitalize text-white text-center pb-3 mb-sm-5 mb-4">daftar
        <span></span>
      </h3>
      <div class="d-flex">
        <div class="col-lg-12 contact-right">
          <div class="w3l-agile">
            <form action="#" method="post" class="row">
              <div class="col-lg-6">
                <h4 class="text-white">Info dasar</h4><br>
                <div class="form-group">
                  <label class="text-white label">Nama Lengkap</label>
                  <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class="text-white label">Jenis Kelamin</label>
                  <select class="form-control" name="gender">
                    <option value="">--Pilih satu--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="text-white label">Alamat</label>
                  <textarea name="message" placeholder="Alamat lengkap" class="form-control" required=""></textarea>
                </div>                
              </div>
              <div class="col-lg-6">
                <h4 class="text-white">Info akun</h4><br>
                <div class="form-group">
                  <label class="text-white label">Email</label>
                  <input type="email" name="subject" placeholder="example@example.com" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label class="text-white label">Password</label>
                  <input type="password" name="phone number" placeholder="Password" class="form-control" required="">
                </div>
                <input type="submit" value="Send">                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //contact -->

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

  <!-- banner text -->
  <script src="assets/js/text.js"></script>
  <!-- menu -->
  <script src="assets/js/menu.js"></script>
  <!-- lightbox -->
  <script src="assets/js/smoothbox.jquery2.js"></script>

</body>

</html>