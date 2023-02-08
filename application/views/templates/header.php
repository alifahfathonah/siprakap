<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Bootstrap core CSS     -->
	<link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--  Material Dashboard CSS    -->
	<link href="<?= base_url() ?>/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?= base_url() ?>/assets/css/demo.css" rel="stylesheet" />
	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url();?>assets/jquery-ui-1.12.1/jquery-ui.css">

</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-active-color="orange" data-background-color="black" data-image="<?= base_url() ?>/assets/img/sidebar-1.jpg">
			<!--
	        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
	        Tip 2: you can also add an image using data-image tag
	        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    		-->

			<div class="logo">
				<a href="#" class="simple-text logo-normal">
					&emsp;&emsp;Sistem Pengajuan <br> &emsp;&nbsp;Surat Kerja Praktek
				</a>
			</div>

			<!-- Avatar Koordinator KP -->
			<div class="sidebar-wrapper">
				<?php if ($this->session->userdata('level') == 'koordinator') : ?>
					<div class="user">
						<div class="photo">
							<img src="<?= base_url() ?>/assets/img/default-avatar.png" />
						</div> 
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" class="collapsed">
								<span>
									<?php

									$data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

									?>
									Koordinator KP
								</span>
							</a>
						</div>
					</div>
				<?php endif; ?>

				<!-- Avatar BAAK -->
				<?php if ($this->session->userdata('level') == 'baak') : ?>
					<div class="user">
						<div class="photo">
							<img src="<?= base_url() ?>/assets/img/default-avatar.png" />
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" class="collapsed">
								<span>
									<?php

									$data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

									?>
									BAAK
								</span>
							</a>
						</div>
					</div>
				<?php endif; ?>

				<!-- Menu Koordinator KP -->
				<?php if ($this->session->userdata('level') == 'koordinator') : ?>
				<ul class="nav">
					<li class="<?php if ($title == 'Dashboard') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('dashboard') ?>">
							<i class="material-icons">dashboard</i>
							<p>Dashboard</p>
						</a>
					</li>

					<li class="
						<?php if ($title == 'Management Surat') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" href="#pagesExamples">
							<i class="material-icons">email</i>
							<p>Management Surat
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Management Surat') : ?>
                            <?= 'collapse in'; ?>
                        <?php else : ?>
                            <?= 'collapse'; ?>
                        <?php endif; ?>
                        " id="pagesExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Pengajuan Surat') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/pengajuan">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Pengajuan Surat</span>
									</a>
								</li>

								<li class="
                                <?php if ($sub_title == 'Surat Keluar') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/surat_keluar">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Surat Keluar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>

						<li class="
                        <?php if ($title == 'Management User') : ?>
                            <?= 'active'; ?>
                        <?php endif; ?>
                            ">
							<a href="<?= base_url() ?>user">
								<i class="material-icons">people</i>
								<p>Management User</p>
							</a>
						</li>

						<li class="
						<?php if ($title == 'Galery') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" href="#formsExamples">
							<i class="material-icons">folder</i>
							<p>Management Data
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Management Data') : ?>
                            <?= 'collapse in'; ?>
                        <?php else : ?>
                            <?= 'collapse'; ?>
                        <?php endif; ?>
                        " id="formsExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Profil') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/profil_kelurahan">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										<span class="sidebar-normal">Profil</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Pedoman KP') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/s_kelurahan">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Pedoman KP</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Proposal KP') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/s_lpm">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Proposal KP</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Perusahaan KP') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/s_linmas">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Perusahaan KP</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Cara Kerja') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/s_pemuda">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Cara Kerja</span>
									</a>
								</li>

							</ul>
						</div>
					</li>

					<?php if ($this->session->userdata('id_user') == TRUE) : ?>

						<li>
							<a href="<?= base_url() ?>logout">
								<i class="material-icons">logout</i>
								<p>Logout</p>
							</a>
						</li>

					<?php else : ?>

						<li>
							<a href="<?= base_url() ?>auth/login">
								<i class="material-icons">login</i>
								<p>Login</p>
							</a>
						</li>

					<?php endif; ?>
				</ul>
				<?php endif; ?>

				<!-- Menu BAAK -->
				<?php if ($this->session->userdata('level') == 'baak') : ?>
				<ul class="nav">
					<li class="<?php if ($title == 'Dashboard') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('dashboard') ?>">
							<i class="material-icons">dashboard</i>
							<p>Dashboard</p>
						</a>
					</li>

					<li class="
						<?php if ($title == 'Management Surat') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" href="#pagesExamples">
							<i class="material-icons">email</i>
							<p>Management Surat
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Management Surat') : ?>
                            <?= 'collapse in'; ?>
                        <?php else : ?>
                            <?= 'collapse'; ?>
                        <?php endif; ?>
                        " id="pagesExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Pengajuan Surat') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/pengajuan">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Pengajuan Surat</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Surat Keluar') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/surat_keluar">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Surat Masuk</span>
									</a>
								</li>
								<!-- <li class="
                                <?php if ($sub_title == 'Surat Keterangan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/surat_keterangan">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Surat Pengantar</span>
									</a>
								</li> -->
								<li class="
                                <?php if ($sub_title == 'Surat Masuk') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/surat_masuk">
										<span class="sidebar-mini">
											<i class="material-icons">navigate_next</i></span>
										</span>
										<span class="sidebar-normal">Surat Balasan</span>
									</a>
								</li>

							</ul>
						</div>
					</li>

					<li class="<?php if ($title == 'Mahasiswa') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('penduduk') ?>">
							<i class="material-icons">assignment_ind</i>
							<p>Mahasiswa</p>
						</a>
					</li>

					<?php if ($this->session->userdata('id_user') == TRUE) : ?>

						<li>
							<a href="<?= base_url() ?>logout">
								<i class="material-icons">logout</i>
								<p>Logout</p>
							</a>
						</li>

					<?php else : ?>

						<li>
							<a href="<?= base_url() ?>auth/login">
								<i class="material-icons">login</i>
								<p>Login</p>
							</a>
						</li>

					<?php endif; ?>
				</ul>
				<?php endif; ?>

			</div>
		</div>
		<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
							<i class="material-icons visible-on-sidebar-regular">more_vert</i>
							<i class="material-icons visible-on-sidebar-mini">view_list</i>
						</button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"> <?= $title; ?> </a>
					</div>
					<!-- <div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">



							<li>
								<a href="<?= base_url() ?>auth/login" class="dropdown-toggle">
									<i class="material-icons">login</i>
									<p class="hidden-lg hidden-md">Login</p>
								</a>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
									<p class="hidden-lg hidden-md">Profile</p>
								</a>
							</li>
							<li class="separator hidden-lg hidden-md"></li>
						</ul>
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group form-search is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i>
								<div class="ripple-container"></div>
							</button>
						</form>
					</div> -->
				</div>
			</nav>