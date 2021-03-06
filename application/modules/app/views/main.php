<?php
$urlSchool = 'http://school.cgaim.ru';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="yandex-verification" content="cc84ea873424a2c2" />
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
                    <a href="<?=$urlSchool?>" class="btn btn-sm btn-orange float-right btn--auth d-none d-lg-block">Вход</a>
                    <label for="main-menu-trigger" id="main-menu-burger" class="d-block d-lg-none">
                        <i class="fas fa-bars"></i>
                    </label>
                    <input type="checkbox" id="main-menu-trigger" value="1">
                    <ul class="list-unstyled main-menu" id="main-menu">
                        <li><a href="http://cgaim.ru/">Главная</a></li>
                        <li><span class="active">Блог</span></li>
                        <li><a href="http://cgaim.ru/courses/">Курсы</a></li>
                        <li><a href="http://cgaim.ru/workshop/">Мастерская</a></li>
                        <li><a href="http://cgaim.ru/#about">О школе</a></li>
                        <li><a href="http://cgaim.ru/#reviews">Отзывы</a></li>
                        <li><a href="http://cgaim.ru/#contacts">Контакты</a></li>
                        <li><a href="<?=$urlSchool?>" class="d-block d-lg-none">Вход</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="page">
            <div class="page-content">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12 d-block d-lg-none">
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

                        <div class="col-md-12 d-block d-lg-none">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Теги</h6>
                                    <div class="tags-list">
                                        <a href="/" class="text-dark">Все публикации</a>
                                        <?php if ($tags) :?>
                                            <?php foreach ($tags as $val) :?>
                                                <a href="/?tag=<?=$val['name']?>" class="text-dark"><?=$val['name']?></a>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-8">
                            <?php $this->content()?>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
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
                                        <?php if ($tags) :?>
                                            <?php foreach ($tags as $val) :?>
                                                <a href="/?tag=<?=$val['name']?>" class="text-dark"><?=$val['name']?></a>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 popular-posts">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Популярное</h6>
                                    <div class="card-list">
                                        <?php if ($items_popular) :?>
                                            <?php foreach ($items_popular as $val) :?>
                                                <div class="card">
                                                    <a href="/item/<?=$val['id']?>/">
                                                        <?php if (!empty($val['img'])) :?>
                                                            <img class="card-img-top" src="/<?=$val['img']?>" alt="<?=htmlspecialchars_decode($val['name'])?>">
                                                        <?php else :?>
                                                            <img class="card-img-top" src="<?=TEMPLATE_DIR?>/blog_tpl/img/blog-img.svg" alt="<?=htmlspecialchars_decode($val['name'])?>">
                                                        <?php endif;?>
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
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 block-support">
                                <div class="card-body">
                                    <p>По вопросам и предложениям пишите на почту <a href="mailto:info@cgaim.ru">info@cgaim.ru</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-info btn-sm" id="scroll-up">Наверх</button>
    <div id="footer">
        <div class="container">
            <div class="top row">
                <div class="col-12">
                    <ul class="list-unstyled main-menu">
                        <li><a href="http://cgaim.ru/">Главная</a></li>
                        <li><span class="active">Блог</span></li>
                        <li><a href="http://cgaim.ru/courses/">Курсы</a></li>
                        <li><a href="http://cgaim.ru/workshop/">Мастерская</a></li>
                        <li><a href="http://cgaim.ru/#about">О школе</a></li>
                        <li><a href="http://cgaim.ru/#reviews">Отзывы</a></li>
                        <li><a href="http://cgaim.ru/#contacts">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom row">
                <div class="col-12 col-md-7 order-2 order-md-1 block-owner-info">
                    <span>&copy; 2018, ИП Серебряков Александр Сергеевич</span>
                    <span>ИНН 344112777283 Счёт 40802 810 3015 0003 5607 БИК 044525999 Корр. счёт 3010 1810 8452 5000 0999  Филиал Точка Публичного акционерного общества Банка «Финансовая Корпорация Открытие» город Москва </span>
                </div>
                <div class="col-12 col-md-5 order-1 order-md-2 mb-2 mb-md-0 text-right">
                    <div class="contacts pt-2">По всем вопросам:&nbsp;<a href="mailto:info@cgaim.ru">info@cgaim.ru</a></div>
                    <div class="soc-block pt-2">
                        <span>Мы в соц. сетях:</span>
                        <a href="https://cutt.ly/ZeuSQfS" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://vk.com/cgaim" target="_blank"><i class="fab fa-vk"></i></a>
                        <a href="https://www.instagram.com/cgaim_school/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?=TEMPLATE_DIR?>/blog_tpl/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=TEMPLATE_DIR?>/blog_tpl/js/app.js?v=<?=VERSION?>"></script>
</body>
</html>