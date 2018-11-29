<!doctype html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=TEMPLATE_DIR?>/admin_1/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=TEMPLATE_DIR?>/admin_1/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=TEMPLATE_DIR?>/admin_1/assets/vendor/linearicons/style.css">
	<link href="<?=TEMPLATE_DIR?>/tools/editor/styles/simditor.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>/tools/editor/styles/simditor-video.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=TEMPLATE_DIR?>/admin_1/assets/css/main.css">
	<link rel="stylesheet" href="<?=TEMPLATE_DIR?>/admin_1/assets/css/app.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=TEMPLATE_DIR?>/admin_1/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=TEMPLATE_DIR?>/admin_1/assets/img/favicon.png">

	<script src="<?=TEMPLATE_DIR?>/admin_1/assets/vendor/jquery/jquery.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#">Admin</a>
						</li>
						<li class="dropdown">
							<a href="/admin/auth/logout/"><i class="lnr lnr-exit"></i> <span>Logout</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/admin/post/" class="active"><i class="lnr lnr-home"></i> <span>Посты</span></a></li>
					</ul>
					<ul class="nav">
						<li><a href="/admin/tags/"><i class="lnr lnr-map"></i> <span>Теги</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<?$this->content()?>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 Company. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?=TEMPLATE_DIR?>/admin_1/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=TEMPLATE_DIR?>/admin_1/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=TEMPLATE_DIR?>/admin_1/assets/scripts/klorofil-common.js"></script>
	<script src="<?=TEMPLATE_DIR?>/tools/editor/scripts/module.js"></script>
	<script src="<?=TEMPLATE_DIR?>/tools/editor/scripts/hotkeys.js"></script>
	<script src="<?=TEMPLATE_DIR?>/tools/editor/scripts/uploader.js"></script>
	<script src="<?=TEMPLATE_DIR?>/tools/editor/scripts/simditor.js"></script>
	<script src="<?=TEMPLATE_DIR?>/tools/editor/scripts/simditor-video.js"></script>
</body>
</html>