<!doctype html>
<html class="no-js" lang="">
<?php $this->view('user-base/head'); ?>
<body>

    <?php $this->view('user-base/header'); ?>

    <?php $this->view('user-base/menu'); ?>

    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Layanan</h2>
                            <p>Berikut ini adalah beberapa layanan yang telah ditentukan.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($d_layanan as $list): ?>
                                    <tr>
                                        <td><?= $list->nama ?></td>
                                        <td><?= $list->harga ?></td>
                                        <td><?= $list->keterangan ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot><tr></tr></tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->view('user-base/js_script'); ?>

</body>

</html>