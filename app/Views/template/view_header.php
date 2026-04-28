<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta http-equiv="refresh" content="20"> -->
	<!--favicon-->
	<link rel="icon" href="<?= base_url('/images/favicon-32x32.png') ?>" type="image/png" />
	<!--plugins-->
	<link href="<?= base_url('app/plugins/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet"/>
	<link href="<?= base_url('app/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('app/plugins/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('app/plugins/metismenu/css/metisMenu.min.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('app/plugins/datatable/css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('app/plugins/highcharts/css/highcharts.css') ?>" rel="stylesheet" />
	<!-- loader-->
	<link href="<?= base_url('app/css/pace.min.css') ?>" rel="stylesheet" />
	<script src="<?= base_url('app/js/pace.min.js') ?>"></script>
	<!-- Bootstrap CSS -->
	<link href="<?= base_url('app/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('app/css/bootstrap-extended.css') ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?= base_url('app/css/app.css') ?>" rel="stylesheet">
	<link href="<?= base_url('app/css/icons.css') ?>" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?= base_url('app/css/dark-theme.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('app/css/semi-dark.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('app/css/header-colors.css') ?>" />
	<!-- <link rel="stylesheet" href="<?= base_url('app/leaflet_map/leaflet.css') ?>" /> -->
	<!-- <script src="<?= base_url('app/leaflet_map/leaflet.js') ?>"></script> -->

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

      <!-- Make sure you put this AFTER Leaflet's CSS -->
 	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

	<title>Flood Disaster Management System</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
	 <!--start header wrapper-->	
	  <div class="header-wrapper">
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="topbar-logo-header">
						<div class="">
							<img src="<?= base_url('images/logo2.jpeg') ?>" class="logo-icon" alt="logo icon">
						</div>
						<div class="">
							<h4 class="logo-text">PAKKIO</h>
							<h7 class="logo-text"> - Flood Disaster Management System</h7>
						</div>
					</div>
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<!-- <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span> -->
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<!-- <a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a> -->
									<div class="header-notifications-list">
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
										<a class="dropdown-item" href="javascript:;">
											
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--navigation-->
		<div class="nav-container">
			<div class="mobile-topbar-header">
				<div>
					<img src="<?= base_url('images/logo-icon.png') ?>" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">PAKKIO</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<nav class="topbar-nav">
				<ul class="metismenu" id="menu">
					<li>
						<!-- <a href="<?php echo base_url().'index.php/home/index' ?>" class="has-arrow"> -->
						<a href="<?= base_url() ?>" class="has-arrow">
							<div class="parent-icon"><i class='bx bx-home-circle'></i>
							</div>
							<div class="menu-title">Home</div>
						</a>
					</li>
					<li>
						<!-- <a href="<?php echo base_url().'index.php/monitoring/index' ?>" class="has-arrow"> -->
						<a href="<?= base_url('monitoring') ?>" class="has-arrow">
							<div class="parent-icon"><i class="bx bx-line-chart"></i>
							</div>
							<div class="menu-title">Monitoring</div>
						</a>
					</li>
					<li>
						<!-- <a class="has-arrow" href="<?php echo base_url().'index.php/tracking/index' ?>"> -->
						<a href="<?= base_url('tracking') ?>" class="has-arrow">
							<div class="parent-icon"><i class="bx bx-category"></i>
							</div>
							<div class="menu-title">Tracking</div>
						</a>
					</li>
					<li>
						<!-- <a class="has-arrow" href="<?php echo base_url().'index.php/information/index' ?>"> -->
						<a href="<?= base_url('information') ?>" class="has-arrow">
							<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
							</div>
							<div class="menu-title">Information</div>
						</a>
					</li>
					<!-- <li>
						<a class="has-arrow" href="<?php echo base_url().'index.php/hotline/index' ?>">
							<div class="parent-icon icon-color-6"> <i class="bx bx-donate-blood"></i>
							</div>
							<div class="menu-title">Hotline Contact</div>
						</a>
					</li> -->
				</ul>
			</nav>
		</div>
		<!--end navigation-->
	   </div>
	   <!--end header wrapper-->

	   <?= $this->renderSection('content') ?>

	   <?= $this->include('template/view_footer') ?>