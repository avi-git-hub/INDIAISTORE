<!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?php echo BASE_URL; ?>" data-env="<?php echo ENVIRONMENT; ?>" />

	<!-- meta -->
	<?php require_once ABS_PATH_BACKEND_SNIPPETS . 'partials/meta.php'; ?>

	<title><?= ((isset($page_data['title'])) && ($page_data['title'] !== '')) ? $page_data['title'] . ' - Indiaistore' : 'Indiaistore'; ?></title>

	<!-- favicon -->
	<link rel="shortcut icon" href="<?= PATH_FRONTEND_CUSTOM_IMG ?>favicon.ico" type="image/x-icon">

	<!-- styles -->
	<?php require_once ABS_PATH_BACKEND_SNIPPETS . 'partials/styles.php'; ?>
	
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>

				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('admin/dashboard') ?>" class="nav-link">Dashboard</a>
				</li>

				<li class="nav-item dropdown d-none d-sm-inline-block">
					<a href="javascript:void(0)" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('admin/product-feature/categories') ?>">Product Features</a>

						<a class="dropdown-item" href="<?= base_url('admin/categories') ?>">Categories</a>

						<a class="dropdown-item" href="<?= base_url('admin/products') ?>">Products</a>
					</div>
				</li>

				<li class="nav-item dropdown d-none d-sm-inline-block">
					<a href="javascript:void(0)" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Misc</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('admin/banner/positions') ?>">Banners</a>

						<div class="dropdown-divider"></div>

						<a class="dropdown-item" href="<?= base_url('admin/stores') ?>">Stores</a>

						<a class="dropdown-item" href="<?= base_url('admin/partners') ?>">Partners</a>

						<div class="dropdown-divider"></div>

						<a class="dropdown-item" href="<?= base_url('admin/navigation/sections') ?>">Navigation</a>
					</div>
				</li>

				<li class="nav-item dropdown d-none d-sm-inline-block">
					<a href="javascript:void(0)" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('admin/components/tabs-block') ?>">Tabs Block</a>
					</div>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<!--<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>-->

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('user/logout') ?>" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<?php require_once ABS_PATH_BACKEND_SNIPPETS . 'sidebar.php'; ?>

		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<?php
					if ((isset($page_data['breadcrumb'])) && ($page_data['breadcrumb'] !== '')) {
						$breadcrumb = $page_data['breadcrumb'];
					?>
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 class="m-0 text-dark"><?php echo $breadcrumb; ?></h1>
							</div>

							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item">
										<a href="#">Admin</a>
									</li>

									<li class="breadcrumb-item active"><?php echo $breadcrumb; ?></li>
								</ol>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
			<!-- /.content-header -->

			<section class="content">