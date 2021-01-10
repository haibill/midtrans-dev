<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kopi Wirs</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Main CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
	<!-- Font-icon css-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini rtl">
	<!-- Navbar-->
	<header class="app-header"><a class="app-header__logo" href="index.html">SMAN 1 Binjai </a>
		<!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
		<!-- Navbar Right Menu-->
		<ul class="app-nav">
			<!-- User Menu-->
			<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
				<ul class="dropdown-menu settings-menu dropdown-menu-right">
					<li><a class="dropdown-item" href=""><i class="fa fa-sign-out fa-lg"></i> Logout</a>
					</li>
				</ul>
			</li>
		</ul>
	</header>
	<!-- Sidebar menu-->
	<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
	<aside class="app-sidebar">
		<div class="app-sidebar__user">
			<!-- <img class="app-sidebar__user-avatar"
				src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"> -->
			<div>
				<p class="app-sidebar__user-name">Nunik Nurmala</p>
				<p class="app-sidebar__user-designation">Mahasiswi</p>
			</div>
		</div>
		<ul class="app-menu">
			<li><a class="app-menu__item" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
			<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cubes"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
				<ul class="treeview-menu">
					<li><a class="treeview-item" href="coa.html"><i class="icon fa fa-circle-o"></i>
							COA</a></li>
					<li><a class="treeview-item" href="bahan-baku.html"><i class="icon fa fa-circle-o"></i> Bahan
							Baku</a></li>
				</ul>
			</li>
			<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Transaksi</span><i class="treeview-indicator fa fa-angle-right"></i></a>
				<ul class="treeview-menu">
					<li><a class="treeview-item" href="pembelian.html"><i class="icon fa fa-circle-o"></i> Pembelian</a>
					</li>
					<li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Penjualan</a></li>
				</ul>
			</li>
			</li>
			<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
				<ul class="treeview-menu">
					<li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Jurnal Umum</a></li>
					<li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Buku Besar</a></li>
					<li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Laporan ???</a></li>
				</ul>
			</li>
		</ul>
	</aside>
	<main class="app-content">
		<?php #echo $contents; 
		?>
	</main>
	<!-- Essential javascripts for application to work-->
	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/main.js'); ?>"></script>
	<!-- The javascript plugin to display page loading on top-->
	<script src="<?= base_url('assets/js/plugins/pace.min.js'); ?>"></script>
	<!-- Page specific javascripts-->
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/chart.js'); ?>"></script>
	<!-- Data table plugin-->
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/jquery.dataTables.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/dataTables.bootstrap.min.js'); ?>"></script>
	<script type="text/javascript">
		$('#sampleTable').DataTable();
	</script>
</body>

</html>