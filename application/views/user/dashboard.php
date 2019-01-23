<!doctype html>
<html class="no-js" lang="">
<?php $this->view('user-base/head'); ?>
<body>

    <?php $this->view('user-base/header'); ?>

    <?php $this->view('user-base/menu'); ?>



    <div class="breadcomb-area">
        <div class="container">
            <div class="row">

                <?php if($pesan=="has_registered"): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button> Selamat! Anda telah terdaftar pada website ini.
                </div>
                <?php endif; ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="fa fa-bookmark-o"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Aktivitas</h2>
                                        <p>Belum ada catatan aktivitas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <p class="btn"><i class="fa fa-check"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="gambar/under.jpg">

            </div>
        </div>
    </div>

    <?php $this->view('user-base/js_script'); ?>

</body>

</html>