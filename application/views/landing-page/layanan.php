  <div class="services py-5" id="layanan">
    <div class="container py-xl-5 py-lg-3">
      <h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">layanan kami
        <span></span>
      </h3>
      <div class="row">
        <?php foreach ($layanan as $item): ?>
        <div class="col-md-6" style="margin-bottom: 20px;">
          <div class="img1 img-grid d-flex align-items-end justify-content-center p-3" 
           style="background-image: url(gambar/layanan/<?= $item->id ?>.jpg)" >
            <div class="img_text_w3ls px-4">
              <h4><?= $item->nama ?></h4>
              <span> </span>
              <p class="text-white"><?= $item->keterangan  ?>. </p>
              <button type="button" class="btn btn-primary seri-w3ls text-white my-4" data-toggle="modal" data-target="#exampleModalCenter">
               Selengkapnya
                <i class="fas fa-long-arrow-alt-right ml-2"></i>
              </button>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <div class="col-md-6" style="margin-bottom: 20px;">
          <div class="img1 img-grid d-flex align-items-end justify-content-center p-3">
            <div class="img_text_w3ls px-4">
              <h4>Lainnya</h4>
              <span> </span>
              <p class="text-white">Anda juga bisa merequest layanan lain yang belum di cantumkan. </p>
              <button type="button" class="btn btn-primary seri-w3ls text-white my-4" data-toggle="modal" data-target="#exampleModalCenter">
               Selengkapnya
                <i class="fas fa-long-arrow-alt-right ml-2"></i>
              </button>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>