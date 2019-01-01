	<div class="agileits-services text-center py-5" id="sparepart">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Sparepart
				<span></span>
			</h3>
			<div class="w3ls_gallery_grids">
				<div class="row agileits_w3layouts_gallery_grid">
					<?php foreach($sparepart as $item): ?>
					<?php $image = "gambar/sparepart/".$item->id.".jpg"; ?>

					<div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14">
						<div class="w3_agile_gallery_effect">
							<a href="<?= $image ?>" class="sb" title="<?= $item->nama ?>">
								<figure>
									<img src="<?= $image ?>" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<center>
			<button type="button" data-toggle="modal" data-target="#masuk" class="btn btn-outline-danger my-4">
                Selengkapnya
                <i class="fas fa-long-arrow-alt-right ml-2"></i>
            </button>
		</center>
	</div>