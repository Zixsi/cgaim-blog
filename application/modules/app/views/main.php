<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?=($page_description ?? 'Новости и статьи о 3D анимации, 2D анимации, моделировании, maya, zbrush, концепт-арт, разработка игр, спецэффекты и многое другое. Подпишись, чтобы не пропустить самое важное!')?>">
	<meta name="keywords" content="<?=($page_keywords ?? 'анимация, клуб аниматоров, аниматоры в россии, фриланс, анимационная студия, уроки по анимации, портфолио, персонаж, тайминг, блокинг, короткометражка, фильм, мульт, перекладка, 2D,3D, animator, animations, дорогов, школа анимации, референс, pixar, scream school, animation, blocking, animation mentor, maya, 3d max, key, character, rig, rigging, blender, setup, timing, movie, tooon, cartoon, anime, reference, short, showreel, demoreel, сообщество по анимации ищу аниматора, вакансии, флеш аниматор, работа аниматорам, фриланс, курсы режиссуры, школа анимации, живопись, рисование, мультфильм, Сериал, Буквальные истории, Авторская анимация, Федор Хитрук,wizartschool, wizart, school, wizart animation, школа компьютерной графики, школа кино индустрия, концепт-арт, иллюстрация, 3D моделирование, 3D скульптинг, курсы Zbrush, курсы 3ds max, курсы maya, cg, gamedev, курсы adobe photoshop')?>">
	<title><?=($page_title = ($page_title ?? ''))?$page_title.' - Cgaim':'Блог о комьютерной графике и анимации'?></title>

	<link rel="icon" type="image/x-icon" href="/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>/blog_tpl/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>/blog_tpl/css/main.css?v=<?=VERSION?>">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131164595-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-131164595-1');
	</script>
</head>
<body>
	<div id="background"></div>
	<div id="content">
		<div id="header">
			<div class="panel-menu">
				<div class="container">
					<a href="/">
						<img src="<?=TEMPLATE_DIR?>/blog_tpl/img/logo_white.png" class="logo">
					</a>
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
			<div class="page-content">
				<div class="container">

					<div class="row">
						<div class="col-md-12 d-none d-md-block d-lg-none">
							<div class="card mb-4">
								<div class="card-body">
									<form action="./" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="q" placeholder="Поиск..." value="<?=($_GET['q'] ?? '')?>">
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="submit">
													<i class="fas fa-search"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-8">
							<?$this->content()?>
						</div>
						<div class="col-lg-4 d-md-none d-lg-block">
							<div class="card mb-4">
								<div class="card-body">
									<form action="./" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="q" placeholder="Поиск..." value="<?=($_GET['q'] ?? '')?>">
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="submit">
													<i class="fas fa-search"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>

							<div class="card mb-4">
								<div class="card-body">
									<h6 class="card-subtitle mb-2 text-muted">Теги</h6>
									<div class="tags-list">
										<a href="/" class="text-dark">Все публикации</a>
										<?if($tags):?>
											<?foreach($tags as $val):?>
												<a href="/?tag=<?=$val['name']?>" class="text-dark"><?=$val['name']?></a>
											<?endforeach;?>
										<?endif;?>
									</div>
								</div>
							</div>

							<div class="card mb-4 popular-posts">
								<div class="card-body">
									<h6 class="card-subtitle mb-2 text-muted">Популярное</h6>
									<div class="card-list">
										<?if($items_popular):?>
											<?foreach($items_popular as $val):?>
												<div class="card">
													<a href="/item/<?=$val['id']?>/">
														<?if(!empty($val['img'])):?>
															<img class="card-img-top" src="/<?=$val['img']?>" alt="<?=htmlspecialchars_decode($val['name'])?>">
														<?else:?>
															<img class="card-img-top" src="<?=TEMPLATE_DIR?>/blog_tpl/img/blog-img.svg" alt="<?=htmlspecialchars_decode($val['name'])?>">
														<?endif;?>
													</a>
													<div class="card-body">
														<div class="row top-panel">
															<div class="col-6">
																<span class="mb-0 text-muted date"><?=get_format_date($val['ts'])?></span>
															</div>
															<div class="col-6 text-right">
																<i class="far fa-eye text-muted"></i> <?=$val['counter']?>
															</div>
														</div>
														<h2 class="card-title">
															<a href="/item/<?=$val['id']?>/"><?=htmlspecialchars_decode($val['name'])?></a>
														</h2>
													</div>
												</div>
											<?endforeach;?>
										<?endif;?>
									</div>
								</div>
							</div>

							<div class="card mb-4 block-support">
								<div class="card-body">
									<p>По вопросам и предложениям пишите на почту <a href="mailto:support@cgaim.ru">support@cgaim.ru</a></p>
								</div>
							</div>
						</div>
					</div>

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
				<div class="col-md-8 col-lg-4 block-owner-info">
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
	<script type="text/javascript" src="<?=TEMPLATE_DIR?>/blog_tpl/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=TEMPLATE_DIR?>/blog_tpl/js/app.js?v=<?=VERSION?>"></script>
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(51620483, "init", {
			id:51620483,
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/51620483" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</body>
</html>