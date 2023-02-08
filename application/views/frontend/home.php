 <!-- Masthead-->
 <header class="masthead" id="profil">
 	<div class="container">
 		<!-- <div class="masthead-subheading">Selamat Datang!</div> -->
 		<div class="masthead-heading text-uppercase">Sistem Pengajuan Surat <br>Kerja Praktek</div>
 		<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('suratotomatis')?>">Buat Surat</a>
 	</div>
 </header>

 <!-- profil--> 
 <section class="page-section" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Profil</h2>
 			<h3 class="section-subheading text-muted">Sistem Pengajuan Surat Kerja Praktek PENS PSDKU Lamongan</h3>
 		</div>
 		<div class="row text-justify pl-5 pr-5">
 			<p><?= $profil[0]['profile'] ?></p>
 			<img class="img-fluid" src="<?= base_url('/assets/img/profil.png'); ?>">
 		</div>
 	</div>
 </section>

 <!-- struktur -->
 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Berkas Pendukung</h2>
 			<h3 class="section-subheading text-muted">Sistem Pengajuan Surat Kerja Praktek PENS PSDKU Lamongan</h3>
 		</div>
 		<div class="row">
 			<div class="col-lg-4 col-sm-6 mb-4"> 
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#skelurahan">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_kelurahan'] ?>"
 							alt="struktur-kelurahan" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Pedoman <br>Kerja Praktek</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + download file</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slpm">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_lpm'] ?>"
 							alt="struktur-LPM" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Contoh Proposal Kerja Praktek</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + download file</div>
 					</div>
 				</div>
 			</div>
 			
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slinmas">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_linmas'] ?>"
 							alt="struktur-linmas" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">List Perusahaan Kerja Praktek</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + download file</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#spemuda">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_pemuda'] ?>"
 							alt="struktur-pemuda" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Contoh Aja si</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#spemuda">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_pemuda'] ?>"
 							alt="struktur-pemuda" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Contoh Aja si</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#spemuda">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_pemuda'] ?>"
 							alt="struktur-pemuda" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Contoh Aja si</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
		 
 		</div>
 	</div>
 </section>
