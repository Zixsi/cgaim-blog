<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	<link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>/blog_tpl/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>/blog_tpl/css/main.css?v=<?=VERSION?>">
</head>
<body>
	<div id="background"></div>
	<div id="content">
		<div id="header">
			<div class="panel-menu">
				<div class="container">
					<ul class="list-unstyled main-menu">
						<li><a href="#">Главная</a></li>
						<li><a href="#">Онлайн курсы</a></li>
						<li><span class="active">Блог</span></li>
						<li><a href="#">Отзывы</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">О школе</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="page">
			<div class="page-head">
				<div class="container">
					<h1 class="page-title text-center">Блог</h1>
				</div>
			</div>

			<div class="page-content">
				<div class="container">
					<?$this->content()?>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<div class="top row">
				<div class="col-12">
					<ul class="list-unstyled main-menu">
						<li><a href="#">Главная</a></li>
						<li><a href="#">Онлайн курсы</a></li>
						<li><span class="active">Блог</span></li>
						<li><a href="#">Отзывы</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">О школе</a></li>
					</ul>
				</div>
			</div>
			<!--
			<div class="middle row">
				<div class="block-contacts col-4">
					<div class="title">Свяжитесь с нами:</div>
					<ul class="list-unstyled">
						<li><a href="mail:info@kaanima.com">info@kaanima.com</a></li>
						<li><a href="mail:job@kaanima.com">job@kaanima.com</a></li>
						<li><a href="mail:game@kaanima.com">game@kaanima.com</a></li>
					</ul>
				</div>
				<div class="block-soc col-3 offset-5">
					<div class="title">Социальные сети:</div>
				</div>
			</div>-->
			<div class="bottom row">
				<div class="col-4 block-owner-info">
					<span>&copy; 2018, ИП Серебряков Александр Сергеевич</span>
					<span>ИНН 1850210580185011</span>
				</div>
				<!--
				<div class="col-4 offset-4 text-right">
					<button type="button" class="btn btn-sm btn-primary">Подписаться на рассылку</button>
				</div>-->
			</div>
		</div>
	</div>
</body>
</html>