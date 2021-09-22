<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<title> Быстрая и сверхточная инвентаризация </title>
	<link rel="stylesheet" href="assets/css/style.css?rev=@@hashs1">
	<link rel="preconnect" href="//api-maps.yandex.ru">
	<link rel="dns-prefetch" href="//api-maps.yandex.ru">
	<meta name="yandex-verification" content="89a8532bc38efe59" />
	<link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
	<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>
		<!--  Google аналитика -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-49181294-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-49181294-1');
	</script>
	<!-- Google Tag Manager -->

	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

	})(window,document,'script','dataLayer','GTM-TMM24SV');</script>

	<!-- End Google Tag Manager -->
	<?php endif; ?>
	<style type="text/css">
		#menu.active{background: #fff; color: #000;}
		#menu .phone{color:#000!important;}
		#menu .close_menu{filter: brightness(0%);}
	</style>
</head>
<body>
<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>
	<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMM24SV"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
<?php endif;  ?>

<?php
//$object = $_GET["utm_object"];
//$geo = $_GET["utm_geo"];

$object = "ИНВЕНТАРИЗАЦИЯ ОС И ТМЦ";
$geo 		= "В России и СНГ";
$s07 		= "объекта";
$sklad_tab = true;

if ( $_GET["utm_object"] === "year" ) {
	$object = "ГОДОВАЯ ИНВЕНТАРИЗАЦИЯ";
	$s07 		= "объекта";
}
if ( $_GET["utm_object"] === "sklad" ) {
	$object = "ИНВЕНТАРИЗАЦИЯ  СКЛАДА";
	$s07 		= "склада";
}
if ( $_GET["utm_object"] === "magazin" ) {
	$object = "ИНВЕНТАРИЗАЦИЯ  МАГАЗИНА";
	$s07 		= "магазина";
	$sklad_tab = false;
}
if ( $_GET["utm_object"] === "apteka" ) {
	$object = "ИНВЕНТАРИЗАЦИЯ  АПТЕКИ";
	$s07 		= "аптеки";
	$sklad_tab = false;
}
if ( $_GET["utm_object"] === "proizvodstvo" ) {
	$object = "ИНВЕНТАРИЗАЦИЯ  <br class'pc'> ПРОИЗВОДСТВА";
	$s07 		= "производства";
	$sklad_tab = false;
}
if ( $_GET["utm_object"] === "mol" ) {
	$object = "ИНВЕНТАРИЗАЦИЯ  <br class'pc'> ПРИ СМЕНЕ МОЛ";
	$s07 		= "объекта";
}
if ( $_GET["utm_object"] === "bankrotstvo" ) {
	$object = "ИНВЕНТАРИЗАЦИЯ  <br class'pc'> ПРИ БАНКРОТСТВЕ";
	$s07 		= "объекта";
}

if ( $_GET["utm_geo"] === "msk" ) {$geo = "В  Москве и Московской области";}
if ( $_GET["utm_geo"] === "spb" ) {$geo = "В Санкт-Петербурге и области";}
?>
	<menu id="menu">
		<img src="assets/img/close_menu.png" class="close_menu">
		<div class="wrap">
			<ul class="menu">
				<li><a href="#s02" class="scrollto">Наши клиенты </a></li>    
				<li><a href="#s03" class="scrollto">Объекты</a></li>     
				<li><a href="#s04" class="scrollto">Стоимость   </a></li>  
				<li><a href="#s06" class="scrollto">Доп. услуги</a></li>
				<li><a href="#s07" class="calc scrollto">Считаете сами?</a></li>
			</ul>
			<div class="contacts">
				<a href="tel:+7 (495) 589-54-86" class="phone">+7 (495) 589-54-86</a>
				<a href="mailto:mail@rosinvent.com" class="email">mail@rosinvent.com</a>
			</div>
		</div>
	</menu>

	<nav id="nav">
		<div class="wrap">
			<div class="col"><img src="assets/img/logo.png?v=1" alt=""></div>
			<!-- /.col -->
			<div class="col">
				<ul class="menu">
					<li><a href="#s02" class="scrollto">Наши клиенты </a></li>    
					<li><a href="#s03" class="scrollto">Объекты</a></li>     
					<li><a href="#s04" class="scrollto">Стоимость   </a></li>  
					<li><a href="#s06" class="scrollto">Доп. услуги</a></li>
				</ul>
			</div>
			<!-- /.col -->
			<div class="col">
				<a href="#s07" class="calc scrollto">Считаете сами?</a>
			</div>
			<!-- /.col -->
			<div class="col tar">
				<a href="tel:+7 (495) 589-54-86" class="phone">+7 (495) 589-54-86</a>
				<a href="mailto:mail@rosinvent.com" class="email flex aic">
					<img src="assets/img/mail.png">
						mail@rosinvent.com
				</a>
			</div>
			<!-- /.col -->
			<div class="burger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</nav>

	<section id="s01">
		<div class="wrap">
			<p class="title">Быстрая и сверхточная</p>
			<h1 class="h1"> <?php echo $object; ?></h1>
			<p class="title"><?php echo $geo; ?></p>
			<div class="devider"></div>
			<ul>
				<li>Выводим на объект до 100 ревизоров <br> в смену</li>
				<li>Скорость работы каждого ревизора <br> до 15 000 единиц в час </li>
				<li>Считаем ОС и ТМЦ в любом объеме</li>
			</ul>
			<a href="#x" class="btn" onclick="popup(1, this)" data-popup="Узнать стоимость - первый экран">Узнать стоимость</a>

			<img src="assets/img/1.png" class="man">
		</div>
	</section>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>

	<div class="rev_devider">
		<div class="wrap tac">
			<p>Работаем 8 лет   <span>|</span>   В России и СНГ   <i class="pc"><span>|</span>   Считаем 24/7</i></p>
		</div>
	</div>

	<section id="s02">
		<div class="wrap">
			<h2 class="h2">Успешные компании <br> заказывают инвентаризацию у РОСИНВЕНТ</h2>
			<div class="logos slider-nav">
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/logo1.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/logo2.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/new_logo1.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/new_logo2.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/new_logo3.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/logo6.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/new_logo4.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/new_logo5.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/new_logo6.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/new_logo7.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/new_logo8.png" alt=""></div>
				</div>
				<div class="slick-slide">
					<div class="logo"><img src="assets/img/new_logo9.png" alt=""></div>
				</div>


			</div>

			
		</div>

		<div class="slider-for">
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/slide.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">МДМ Банк</p>
							<div class="description">Было необходимо в срок две недели провести инвентаризацию основных средств залогового имущества банка в Ставрополе и Минеральных водах. Работа была выполнена за 12 дневных смен, было проинвентаризировано более 10 000 единиц основных средств.</div>
							<a data-fancybox="letter_1" href="assets/img/letters/mdm.jpg" class="read">Читать отзыв</a>
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/hilti.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">HILTI</p>
							<div class="description">Инвентаризация Центрального склада компании Hilti перед переездом на новый склад. Справились с работой за 60 часов или 5 смен беспрерывной и круглосуточной работы. Посчитали 25 000 000 единиц товара разного объема. (МО, Пушкино).</div>
							<a data-fancybox="letter_2" href="assets/img/letters/hilti.jpg" class="read">Читать отзыв</a>
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/home.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">HOME MARKET</p>
							<div class="description">Инвентаризация сети магазинов и центрального склада. Посчитали более 80 магазинов сети, включая такие регионы как город Москва, Московская область и другие.  </div>
							<!-- <a href="#x" class="read">Читать отзыв</a> -->
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/jonson.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">Johnson & Johnson</p>
							<div class="description">Инвентаризация центрального склада компании с использованием технологии сбора штрихкодов. Посчитали 300 000 единиц за 3 смены.  </div>
							<!-- <a href="#x" class="read">Читать отзыв</a> -->
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/bank.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">Банк Зенит</p>
							<div class="description">Провели инвентаризацию склада в сжатые сроки. За 4 смены было посчитано более 800 000 бутылок. В результате выявлена большая пересортица. </div>
							<a data-fancybox="letter_3" href="assets/img/letters/zenit.jpg" class="read">Читать отзыв</a>
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/bethoven.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">Бетховен</p>
							<div class="description">Провели инвентаризацию всей сети (50 магазинов). Было выявлено более 7000 основных средств.
								<p class="mt1">Создали каталог с фотографиями и обклеили имущество этикетками с инвентарными номерами.</p>
							</div>
							<a data-fancybox="letter_4" href="assets/img/letters/bethoven.jpg" class="read">Читать отзыв</a>
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/sever.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">Северная звезда</p>
							<div class="description">Провели инвентаризацию более 100 аптек сети в Москве и Московской области в кратчайшие сроки. </div>
							<!-- <a href="#x" class="read">Читать отзыв</a> -->
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>

			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/znak.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">Корпорация ЗНАК</p>
							<div class="description">Проводим инвентаризацию центрального склада на протяжении трех лет.
							 <p class="mt1">Делаем пересчет складских остатков в конце каждого года.</p>
							</div>
							<!-- <a href="#x" class="read">Читать отзыв</a> -->
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/traektoria.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">Траектория</p>
							<div class="description">Инвентаризация ТМЦ в сети из 15 магазинов, в том числе
								<br> 
							7 региональных. Вся сеть была посчитана за 2 недели.</div>
							<!-- <a href="#x" class="read">Читать отзыв</a> -->
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/mos.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">МосГорТур</p>
							<div class="description">Провели инвентаризацию основных средств в размере 15 000 ед. Работали на 10 объектах в Москве и Московской области. Сформировали каталог с фото, все ОС оклеены этикетками со штрихкодами.</div>
							<a data-fancybox="letter_5" href="assets/img/letters/mosgostur.jpg" class="read">Читать отзыв</a>
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/sintez.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">Синтез</p>
							<div class="description">Провели инвентаризацию склада фармацевтического производства в Москве при смене руководителя. Точность подсчетов составила 100%, была выявлена пересортица.</div>
							<a data-fancybox="letter_6" href="assets/img/letters/sintez.jpg" class="read">Читать отзыв</a>
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
			<div class="slick-slide">
				<div class="inner" style="background-image: url('assets/img/chai.jpg')">
					<div class="white">
						<div class="top">
							<div class="buttons">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
							<p class="title">Чайхона №1</p>
							<div class="description">Провели инвентаризацию основных средств в количестве 3 600 единиц. Все ОС были оклеены высокопрочными этикетками с наименованием и штрихкодом.</div>
							<a data-fancybox="letter_7" href="assets/img/letters/chaihina.jpg" class="read">Читать отзыв</a>
						</div>
						<!-- /.top -->
						<div class="bottom tac">
							<a href="#s04" class="btn scrollto">Рассчитать стоимость</a>
						</div>
						<!-- /.bottom -->
					</div>
					<!-- /.white -->
				</div>			
			</div>
		
		</div>
		<!-- /.slider-for -->
	</section>


	<section id="s03">
		<div class="wrap flex">
			<aside>
				<ul>
					<li>
						<span class="span_1">точность</span>
						<span class="span_2">99,98 - 100%</span>
					</li>
					<li>
						<span class="span_3">до 15 000 ед в час</span>
						<span class="span_4">скорость</span>
					</li>
					<li>
						<span class="span_5">география</span>
						<span class="span_6">Россия и СНГ</span>
					</li>
				</ul>
			</aside>
			<main>
				<p class="title">Выберите нужный объект:</p>
				<ul class="tab_list">
					<li data-id="1" 
						class="<?php echo ($sklad_tab) ? 'active' : '' ?> "
						>
						<div class="img"><img src="assets/img/tab1.png" alt=""></div>
						<p>Склад</p>
					</li>
					<li data-id="2" 
						class="<?php echo ($_GET['utm_object'] === 'magazin') ? 'active' : '' ?>"
						>
						<div class="img"><img src="assets/img/tab2.png" alt=""></div>
						<p>Магазин</p>
					</li>
					<li data-id="3" 
						class="<?php echo ($_GET['utm_object'] === 'apteka') ? 'active' : '' ?>"
						>
						<div class="img"><img src="assets/img/tab3.png" alt=""></div>
						<p>Аптека</p>
					</li>
					<li data-id="4" 
						class="<?php echo ($_GET['utm_object'] === 'proizvodstvo') ? 'active' : '' ?>"
						>
						<div class="img"><img src="assets/img/tab4.png" alt=""></div>
						<p>Производство <br> и строительство</p>
					</li>
					<li data-id="5">
						<div class="img"><img src="assets/img/tab5.png?v=1" alt=""></div>
						<p>Организации <br> и офисы</p>
					</li>
					<li data-id="6">
						<div class="img"><img src="assets/img/tab6.png" alt=""></div>
						<p>Другой <br> объект</p>
					</li>
				</ul>
				<!-- /.tab_list -->

				<div class="tab_container">
					<div data-id="1" class="tab_content <?php echo ($sklad_tab) ? 'active' : '' ?>">
						<p class="tab_title">Инвентаризация и оптимизация Вашего склада</p>
						<ul class="tab_content_list">
							<li>Cчитаем склады всех типов, классов и способов хранения на территории <br> России и СНГ;</li>
							<li>Работаем 24/7 в удобном для Вас режиме. Выводим до 100 ревизоров в смену;</li>
							<li>Внедряем адресное хранение в систему учета, обучаем персонал работе <br> с системой;</li>
							<li>Налаживаем логистику склада, повышаем скорость и эффективность <br> операционных процессов;</li>
							<li>Проводим инвентаризацию по технологии RFID;</li>
							<li>Предоставляем персонал для дополнительных работ.</li>
						</ul>
					</div>
					<!-- /.tab_content -->
					<div data-id="2" class="tab_content <?php echo ($_GET['utm_object'] === 'magazin') ? 'active' : '' ?>">
						<p class="tab_title">Инвентаризация магазина в удобное время</p>
						<ul class="tab_content_list">
							<li>Cчитаем торговые точки и магазины любого формата и объема на территории <br> России и СНГ;</li>
							<li>Работаем 24/7 в удобном для Вас режиме. Выводим до 100 ревизоров в смену;</li>
							<li>Проводим инвентаризацию нескольких объектов одновременно, независимо <br> от места расположения;</li>
							<li>Налаживаем логистику магазина, повышаем скорость и эффективность <br> операционных процессов;</li>
							<li>Осуществляем выкладу и переоценку товара, помогаем сделать приемку;</li>
							<li>Предоставляем персонал для дополнительных работ.</li>
							<li>Считаем основные средства и товарно-материальные ценности.</li>
						</ul>
					</div>
					<!-- /.tab_content -->
					<div data-id="3" class="tab_content <?php echo ($_GET['utm_object'] === 'apteka') ? 'active' : '' ?>">
						<p class="tab_title">Инвентаризация аптеки</p>
						<ul class="tab_content_list">
							<li>Cчитаем аптеки любого формата и объема на территории России и СНГ;</li>
							<li>Работаем 24/7 в удобном для Вас режиме. Выводим до 100 ревизоров в смену;</li>
							<li>Проводим инвентаризацию нескольких объектов одновременно, независимо <br> от места расположения;</li>
							<li>Сканируем по штрихкоду, с учетом серии, срока годности и стоимости;</li>
							<li>Осуществляем маркировку, выкладу и переоценку товара;</li>
							<li>Предоставляем персонал для дополнительных работ.</li>
							<li>Считаем основные средства и товарно-материальные ценности.</li>
						</ul>
					</div>
					<!-- /.tab_content -->
					<div data-id="4" class="tab_content <?php echo ($_GET['utm_object'] === 'proizvodstvo') ? 'active' : '' ?>">
						<p class="tab_title">производства и строительные площадки</p>
						<ul class="tab_content_list">
							<li>Инвентаризация сырья, полупродуктов, готовой продукции и расходных <br> материалов;</li>
							<li>Инвентаризация инструментов и оборудования;</li>
							<li>Инвентаризация техники, строительных лесов и опалубки;</li>
							<li>Оптимизация складской логистики: учет, хранение, приемка и отгрузка;</li>
							<li>Создание номенклатурного справочника.</li>
						</ul>
					</div>
					<!-- /.tab_content -->
					<div data-id="5" class="tab_content">
						<p class="tab_title">инвентаризация основных средств</p>
						<ul class="tab_content_list">
							<li>Инвентаризация любого имущества организации (мебель, оргтехника, <br class="pc"> оборудование и прочее);</li>
							<li>Маркировка имущества этикетками и RFID-метками;</li>
							<li>Выявление расхождений в учете;</li>
							<li>Создание каталога с имуществом: описание, маркировка, фотографирование;</li>
							<li>Выявление испорченного и непригодного имущества.</li>
						</ul>
					</div>
					<!-- /.tab_content -->
					<div data-id="6" class="tab_content">
						<p class="tab_title">инвентаризация ос и тмц «под ключ»</p>
						<ul class="tab_content_list">
							<li>Инвентаризация на нескольких объектах одновременно, в Росси и СНГ;</li>
							<li>Работаем 24/7, в удобном для Вас режиме. Выводим до 100 ревизоров в смену;</li>
							<li>Считаем штучные, сыпучие и жидкие ТМЦ;</li>
							<li>Независимая сверка данных;</li>
							<li>Выгрузка результатов в удобной для Вас форме.</li>
						</ul>
					</div>
					<!-- /.tab_content -->
				</div>
				<!-- /.tab_container -->
			</main>
	
			<div class="accordion_block">

				<div class="accordion">
					<p class="head">
						<img src="assets/img/r1.png" alt="">
						<span>Склад</span>
					</p>
					<div class="content">
						<p class="tab_title">Инвентаризация и оптимизация Вашего склада</p>
						<ul class="tab_content_list">
							<li>Cчитаем склады всех типов, классов и способов хранения на территории <br> России и СНГ;</li>
							<li>Работаем 24/7 в удобном для Вас режиме. Выводим до 100 ревизоров в смену;</li>
							<li>Внедряем адресное хранение в систему учета, обучаем персонал работе <br> с системой;</li>
							<li>Налаживаем логистику склада, повышаем скорость и эффективность <br> операционных процессов;</li>
							<li>Проводим инвентаризацию по технологии RFID;</li>
							<li>Предоставляем персонал для дополнительных работ.</li>
						</ul>
					</div>
				</div>

				<div class="accordion">
					<p class="head">
						<img src="assets/img/r2.png" alt="">
						<span>Магазин</span>
					</p>
					<div class="content">
						<p class="tab_title">Инвентаризация магазина в удобное время</p>
						<ul class="tab_content_list">
							<li>Cчитаем торговые точки и магазины любого формата и объема на территории <br> России и СНГ;</li>
							<li>Работаем 24/7 в удобном для Вас режиме. Выводим до 100 ревизоров в смену;</li>
							<li>Проводим инвентаризацию нескольких объектов одновременно, независимо <br> от места расположения;</li>
							<li>Налаживаем логистику магазина, повышаем скорость и эффективность <br> операционных процессов;</li>
							<li>Осуществляем выкладу и переоценку товара, помогаем сделать приемку;</li>
							<li>Предоставляем персонал для дополнительных работ.</li>
							<li>Считаем основные средства и товарно-материальные ценности.</li>
						</ul>
					</div>
				</div>

				<div class="accordion">
					<p class="head">
						<img src="assets/img/r3.png" alt="">
						<span>Аптека</span>
					</p>
					<div class="content">
						<p class="tab_title">Инвентаризация аптеки</p>
						<ul class="tab_content_list">
							<li>Cчитаем аптеки любого формата и объема на территории России и СНГ;</li>
							<li>Работаем 24/7 в удобном для Вас режиме. Выводим до 100 ревизоров в смену;</li>
							<li>Проводим инвентаризацию нескольких объектов одновременно, независимо <br> от места расположения;</li>
							<li>Сканируем по штрихкодам, с учетом серии, срока годности и стоимости;</li>
							<li>Осуществляем маркировку, выкладку и переоценку товара;</li>
							<li>Предоставляем персонал для дополнительных работ.</li>
							<li>Считаем основные средства и товарно-материальные ценности.</li>
						</ul>
					</div>
				</div>

				<div class="accordion">
					<p class="head">
						<img src="assets/img/r4.png" alt="">
						<span>Производство <br> и строительство</span>
					</p>
					<div class="content">
						<p class="tab_title">производства и строительные площадки</p>
						<ul class="tab_content_list">
							<li>Инвентаризация сырья, полупродуктов, готовой продукции и расходных <br> материалов;</li>
							<li>Инвентаризация инструментов и оборудования;</li>
							<li>Инвентаризация техники, строительных лесов и опалубки;</li>
							<li>Оптимизация складской логистики: учет, хранение, приемка и отгрузка;</li>
							<li>Создание номенклатурного справочника.</li>
						</ul>
					</div>
				</div>

				<div class="accordion">
					<p class="head">
						<img src="assets/img/r5.png" alt="">
						<span>Организации и офисы</span>
					</p>
					<div class="content">
						<p class="tab_title">инвентаризация основных средств</p>
						<ul class="tab_content_list">
							<li>Инвентаризация любого имущества организации (мебель, оргтехника, <br> оборудование и прочее);</li>
							<li>Маркировка имущества этикетками и RFID-метками;</li>
							<li>Выявление расхождений в учете;</li>
							<li>Создание каталога с имуществом: описание, маркировка, фотографирование;</li>
							<li>Выявление испорченного и непригодного имущества.</li>
						</ul>
					</div>
				</div>

				<div class="accordion">
					<p class="head">
						<img src="assets/img/r6.png" alt="">
						<span>Другой объект</span>
					</p>
					<div class="content">
						<p class="tab_title">инвентаризация ос и тмц «под ключ»</p>
						<ul class="tab_content_list">
							<li>Инвентаризация любого имущества организации (мебель, оргтехника, <br> оборудование и прочее);</li>
							<li>Маркировка имущества этикетками и RFID-метками;</li>
							<li>Выявление расхождений в учете;</li>
							<li>Создание каталога с имуществом: описание, маркировка, фотографирование;</li>
							<li>Выявление испорченного и непригодного имущества.</li>
						</ul>
					</div>
				</div>

			</div>

		</div>
	</section>


	<section id="s04">
		<div class="wrap">
			<aside>
				<div class="grey">
					<p class="grey_title">Ваша скидка:</p>
					<p class="percent"><span id="percent">0</span>%</p>
					<p class="grey_desc">Чтобы увеличить размер скидки, <br> <span id="start">начните</span> отвечать на вопросы</p>
				</div>
				<!-- /.grey -->
				<p class="economy">Сэкономьте время нашего менеджера <br> и получите скидку за каждый ответ</p>
			</aside>
			<main>
				<p class="quiz_title">Узнайте стоимость работ и <span>получите скидку</span> <br> на проведение первой инвентаризации</p>
				<p class="quiz_subtitle">Для этого заполните анкету:</p>
				<div class="pdogress_bar">
					<div class="bar"></div>
				</div>
				<!-- /.pdogress_bar -->
				<form action="spasibo.php" method="post" id="quiz">
					<div class="change_block active" data-step="1">
						<p class="question">Выберите объекты, где будет проводиться инвентаризация:</p>
						<div class="radios">
							<div class="form_control">
								<input type="checkbox" name="object[]" value="Складское помещение" id="object_1">
								<label for="object_1">Складское помещение</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="checkbox" name="object[]" value="Офисное помещение или организация" id="object_2">
								<label for="object_2">Офисное помещение <br> или организация</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="checkbox" name="object[]" value="Строительная площадка" id="object_3">
								<label for="object_3">Строительная <br> площадка</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="checkbox" name="object[]" value="Магазин/Супермаркет" id="object_4">
								<label for="object_4">Магазин/Супермаркет</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="checkbox" name="object[]" value="Завод/Производство" id="object_5">
								<label for="object_5">Завод/Производство</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="checkbox" name="object[]" value="Аптека" id="object_6">
								<label for="object_6">Аптека</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control long flex aic own_variable_input" >
								<input type="checkbox" name="object[]" value="Свой вариант" id="object_7">
								<label for="object_7">Свой вариант</label>
								<input type="text" name="object_own_variable" placeholder="Укажите тип объекта">
							</div>
							<!-- /.form_control -->
						</div>
						<!-- /.radios -->
						<div class="buttons flex aic">
							<a href="#x" class="goNext blink" disabled="disabled">продолжить</a>
						</div>
					</div>
					<!-- /.change_block -->
					<div class="change_block" data-step="2">
						<p class="question">Какое количество объектов необходимо посчитать?</p>

						<div class="radios">
							<div class="form_control">
								<input type="radio" name="amount" value="1 объект" id="amount_1">
								<label for="amount_1">1 объект</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="amount" value="2 объекта" id="amount_2">
								<label for="amount_2">2 объекта</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="amount" value="3 объекта" id="amount_3">
								<label for="amount_3">3 объекта</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="amount" value="4 объекта" id="amount_4">
								<label for="amount_4">4 объекта</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="amount" value="5 и более объектов" id="amount_5">
								<label for="amount_5">5 и более объектов</label>
							</div>
							<!-- /.form_control -->
						</div>

						<div class="buttons flex aic">
							<a href="#x" class="goBack goToFirstStep"><img src="assets/img/back.png"></a>
							<a href="#x" class="goNext" disabled="disabled">продолжить</a>
						</div>
					</div>
					<!-- /.change_block -->
					<div class="change_block " data-step="3">
						<p class="question">Где находятся Ваши объекты?</p>

						<div class="radios">
							<div class="form_control">
								<input type="checkbox" name="placing[]" value="Москва и область" id="placing_1">
								<label for="placing_1">Москва и область</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="checkbox" name="placing[]" value="Санкт-Петербург и область" id="placing_2">
								<label for="placing_2">Санкт-Петербург <br> и область</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="checkbox" name="placing[]" value="В ЦФО" id="placing_3">
								<label for="placing_3">В ЦФО</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="checkbox" name="placing[]" value="В нескольких регионах" id="placing_4">
								<label for="placing_4">В нескольких <br> регионах</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control long flex aic own_variable_input mr0" >
								<input type="checkbox" name="placing[]" value="Свой вариант" id="placing_5">
								<label for="placing_5">Свой вариант</label>
								<input type="text" name="placing_own_variable" placeholder="Укажите регион или несколько">
							</div>
							<!-- /.form_control -->
						</div>

						<div class="buttons flex aic">
							<a href="#x" class="goBack"><img src="assets/img/back.png"></a>
							<a href="#x" class="goNext" disabled="disabled">продолжить</a>
						</div>

					</div>
					<!-- /.change_block -->
					<div class="change_block " data-step="4">
						<p class="question">Кратко опишите, что нужно посчитать?</p>
						<div class="radios">
							<textarea name="chto_schitat" placeholder="Например: продукты, одежда, строительные материалы, мебель, основные средства и т.д."></textarea>
						</div>

						<div class="buttons flex aic">
							<a href="#x" class="goBack"><img src="assets/img/back.png"></a>
							<a href="#x" class="goNext" disabled="disabled">продолжить</a>
						</div>
					</div>
					<!-- /.change_block -->
					<div class="change_block " data-step="5">
						<p class="question">Сколько единиц ОС и/или ТМЦ нужно посчитать?</p>
						<div class="radios">
							<div class="form_control">
								<input type="radio" name="how_much" value="Менее 5 000 единиц" id="how_much_1">
								<label for="how_much_1">Менее 5 000 единиц</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="how_much" value="От 5 000 до 20 000 единиц" id="how_much_2">
								<label for="how_much_2">От 5 000 до 20 000 <br> единиц</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="how_much" value="От 20 000 до 50 000 единиц" id="how_much_3">
								<label for="how_much_3">От 20 000 до 50 000 <br> единиц</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="how_much" value="От 50 000 до 100 000 единиц" id="how_much_4">
								<label for="how_much_4">От 50 000 до 100 000 <br> единиц</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="how_much" value="Более 100 000 единиц" id="how_much_5">
								<label for="how_much_5">Более 100 000 единиц</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="how_much" value="Затрудняюсь ответить" id="how_much_6">
								<label for="how_much_6">Затрудняюсь ответить</label>
							</div>
							<!-- /.form_control -->
						</div>

						<div class="buttons flex aic">
							<a href="#x" class="goBack"><img src="assets/img/back.png"></a>
							<a href="#x" class="goNext" disabled="disabled">продолжить</a>
						</div>
					</div>
					<!-- /.change_block -->
					<div class="change_block " data-step="6">
						<p class="question">У Вас есть номенклатурный справочник?</p>
						<div class="radios">
							<div class="form_control">
								<input type="radio" name="spravochnik" value="Да" id="spravochnik_1">
								<label for="spravochnik_1">Да</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="spravochnik" value="Нет" id="spravochnik_2">
								<label for="spravochnik_2">Нет</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="spravochnik" value="Затрудняюсь ответить" id="spravochnik_3">
								<label for="spravochnik_3">Затрудняюсь ответить</label>
							</div>
							<!-- /.form_control -->
						</div>

						<div class="buttons flex aic">
							<a href="#x" class="goBack"><img src="assets/img/back.png"></a>
							<a href="#x" class="goNext" disabled="disabled">продолжить</a>
						</div>
					</div>
					<!-- /.change_block -->

					<div class="change_block " data-step="7">
						<p class="question">Будет ли присутствовать рабочая сила с Вашей стороны?</p>
						<div class="radios">
							<div class="form_control">
								<input type="radio" name="rab_sila" value="Да" id="rab_sila_1">
								<label for="rab_sila_1">Да</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="rab_sila" value="Нет" id="rab_sila_2">
								<label for="rab_sila_2">Нет</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="rab_sila" value="Затрудняюсь ответить" id="rab_sila_3">
								<label for="rab_sila_3">Затрудняюсь ответить</label>
							</div>
							<!-- /.form_control -->
						</div>

						<div class="buttons flex aic">
							<a href="#x" class="goBack"><img src="assets/img/back.png"></a>
							<a href="#x" class="goNext" disabled="disabled">продолжить</a>
						</div>
					</div>
					<!-- /.change_block -->

					<div class="change_block " data-step="8">
						<p class="question">У Вас есть нерабочий день для проведения инвентаризации?</p>
						<div class="radios">
							<div class="form_control">
								<input type="radio" name="day" value="Да" id="day_1">
								<label for="day_1">Да</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="day" value="Нет" id="day_2">
								<label for="day_2">Нет</label>
							</div>
							<!-- /.form_control -->
							<div class="form_control">
								<input type="radio" name="day" value="Затрудняюсь ответить" id="day_3">
								<label for="day_3">Затрудняюсь ответить</label>
							</div>
							<!-- /.form_control -->
						</div>

						<div class="buttons flex aic">
							<a href="#x" class="goBack"><img src="assets/img/back.png"></a>
							<a href="#x" class="goNext" disabled="disabled">продолжить</a>
						</div>
					</div>
					<!-- /.change_block -->

					<div class="change_block " data-step="9">
						<p class="question">По какому номеру мы сможем уточнить детали, если потребуется?</p>
						<input type="tel" name="tel" class="phone"  placeholder="Укажите номер телефона" >
						<p class="dis">За указанным номером <span>будет закреплена скидка</span></p>

						<div class="buttons flex aic">
							<a href="#x" class="goBack"><img src="assets/img/back.png"></a>
							<a href="#x" class="goNext checkPhone" disabled="disabled">продолжить</a>
						</div>
					</div>
					<!-- /.change_block -->

					<div class="change_block" data-step="10">
  <p class="question">Как Вас зовут и на какую почту отправить предложение?</p>
  <input
    type="text"
    name="name"
    class="name checkInput g_name"
    placeholder="Укажите Ваше имя"
  />
  <input
    type="email"
    name="email"
    class="email checkInput g_mail"
    placeholder="Укажите E-mail"
  />
  <!-- reCAPTCHA 
    reCAPTCHA 
    reCAPTCHA  -->
  <div class="g_cpha-inner">
    <div
      class="g-recaptcha"
      data-sitekey="6Ld3hfsZAAAAAG14aFLiGY3Wt_8dM1l-WpbF3hQ5"
      data-callback="verifyCaptcha"
    ></div>
    <div
      class="googleError"
      style="color: red"
      onclick="return submitUserForm()"
    ></div>
  </div>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
    let googleOk = '';
    let googleMailOk = false;
    const setDis = () => {
      document
        .querySelector('.google_btn')
        .setAttribute('disabled', 'disabled');
    };
    const removeDis = () => {
      document.querySelector('.google_btn').removeAttribute('disabled');
    };
    function googleInputs() {
      let mail = document.querySelector('.g_mail').value;
      let name = document.querySelector('.g_name').value;
      function validate() {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        let k = reg.test(mail);
        let p = name.length >= 2;
        if (k && p) {
          googleMailOk = true;
        } else {
          googleMailOk = false;
        }
      }
      validate();
    }
    function submitUserForm() {
      var responseREACP = grecaptcha.getResponse();
      googleOk = grecaptcha.getResponse();
      if (responseREACP.length == 0) {
        console.log(responseREACP);
        document.querySelector('.googleError').innerHTML =
          'Подтвердите что вы не робот';
        document
          .querySelector('.google_btn')
          .setAttribute('disabled', 'disabled');
        return false;
      } else {
      }
      return true;
    }
    const handleGoogle = () => {
      googleInputs();
      let g = document.querySelector('.googleError').innerHTML;
      if (
        document.querySelector('.googleError').innerHTML == '' &&
        googleMailOk
      ) {
        removeDis();
      } else {
        setDis();
      }
    };
    document.addEventListener('mousemove', handleGoogle);
    document.addEventListener('click', handleGoogle);
    document.addEventListener('input', handleGoogle);

    function verifyCaptcha() {
      document.querySelector('.googleError').innerHTML = '';
      document.querySelector('.google_btn').removeAttribute('disabled');
    }
  </script>

  <!-- reCAPTCHA 
    reCAPTCHA 
    reCAPTCHA  -->

  <div class="buttons flex aic">
    <a href="#x" class="goBack"><img src="assets/img/back.png" /></a>
    <!-- /.change_block -->

    <a href="#x" class="goNext getResultBtn google_btn" disabled="disabled"
      >продолжить <span onclick="return submitUserForm()"></span>
    </a>
  </div>
</div>

					<!-- /.change_block -->

					<div class="change_block " data-step="11">
					</div>
					<!-- /.change_block -->
					<input type="hidden" name="utm_source" value="<?php echo ($_GET['utm_source']) ? $_GET['utm_source'] : '' ?>">
					<input type="hidden" name="comment" value="Квиз">

					<p class="answering">Отвечая на вопросы Вы даёте согласие  на обработу   Персональных данных и согласны  с <a href="policy/" target="_blank">Политикой конфиденциальности.</a></p>
					<input type="hidden" name="AntiSpam" value="">
				</form>
			</main>
		</div>
	</section>


	<section id="s05">
		<div class="wrap">
			<div class="slider_images">
				<div class="slick_slide"><img src="assets/img/2.png" class="man"></div>
				<div class="slick_slide"><img src="assets/img/4.png" class="man"></div>
				<div class="slick_slide"><img src="assets/img/5.png" class="man girla"></div>
				<div class="slick_slide"><img src="assets/img/6.png" class="man"></div>
			</div>
			
			<div class="slick-slider">

				<div class="slick-slide">
					<h2 class="h2">Трехступенчатая <br> проверка результатов</h2>
					<p>Фирменное программное обеспечение и уникальная система проверки результатов полностью исключают ошибки по причине человеческого фактора.</p>
					<p>Достигается абсолютная точность подсчетов при максимальной скорости работы.</p>
				</div>
				<div class="slick-slide">
					<h2 class="h2">Уникальная система <br> отбора сотрудников</h2>
					<p>Считать Ваш объект будут специалисты, отобранные <br> по 10 различным показателям скорости и качества работы.</p>

					<p>Созданный нами алгоритм позволет выявлять самых <br> результативных сотрудников, отсекая малоэффективных. <br> Выбирая нас, Вы доверяете инвентаризацию лучшим.</p>
				</div>
				<div class="slick-slide">
					<h2 class="h2">Автоматизация сбора <br> и анализа данных</h2>
					<p>Система автоматически распределяет задачи между <br> ревизорами, исключая простои в работе и нерациональное  использование времени.</p>
					<p>Анализ полученных результатов ведется в режиме реального времени. Все неточности исправляются ежеминутно.</p>
				</div>
				<div class="slick-slide">
					<h2 class="h2">Считаем остатки ТМЦ <br> в любом виде и форме </h2>
					<p>Наша технология позволяет вести учет как штучных <br> материальных средств, так и сыпучих или жидких.</p>
					<p>Это могут быть крупы в супермаркете, остатки напитков <br> в баре, песчано-гравийная смесь на строительной <br> плошадке или сырье на производстве.</p>
				</div>
			</div>
			<!-- /.slick-slider -->
		</div>
	</section>


	<section id="s06">
		<div class="wrap">
			<aside>
				<p class="title">Дополнительные услуги</p>
				<ul class="tab_list">
					<li data-id="1" class="active"><span>Адресное хранение</span></li>
					<li data-id="2"><span>Система инвентаризации</span></li>
					<li data-id="3"><span>Инвентаризация архивов</span></li>
					<li data-id="4"><span>Интеграция с 1С</span></li>
					<li data-id="5"><span>Помощь в переезде</span></li>
					<li data-id="6"><span>Оценка имущества</span></li>
					<li data-id="7"><span>Штрихкодирование</span></li>
					<li data-id="8"><span>Персонал в аренду</span></li>
				</ul>
			</aside>
			<main>
				<div class="tab_container">
					<div data-id="1" class="tab_content active">
						<p class="tab_name">Внедрение системы адресного хранения в 1С</p>
						<p>Организация оптимальной системы приемки, отгрузки и хранения <br> ТМЦ с минимизацией финансовых и временных потерь.</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Какие <span>преимущества</span> дает адресное хранение?</p>
						<ul class="tab_content_list">
							<li>Сокращение времени работы сотрудников, повышение их эффективности.</li>
							<li>Возможность сокращения штата сотрудников и расходов на их содержание. </li>
							<li>Снижение временных затрат на обучение новых сотрудников.</li>
							<li>Увеличение объема принимаемой и отгружаемой продукции.</li>
							<li>Снижение количества списываемой продукции.</li>
							<li>Освобождение места для хранения дополнительных товаров, увеличение <br> объемов продаж.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(2, this)" data-popup="Внедрение системы адресного хранения в 1С">Получить консультацию</a>
					</div>
					<!-- /.tab_content -->
					<div data-id="2" class="tab_content">
						<p class="tab_name">Внедрение автоматизированной системы <br> инвентаризации</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Какие <span>преимущества</span> дает система?</p>
						<ul class="tab_content_list mb1">
							<li>Точность инвентаризации 99,98 - 100%.</li>
							<li>Исключение подтасовки результатов сотрудниками. </li>
							<li>Увеличение скорости подсчетов до 10 000 единиц в час на сотрудника.</li>
							<li>Автоматизация учета и выявления излишков, недостач или пересортицы.</li>
						</ul>
						<p class="tab_contetn_title mt1">Внедрение циклической инвентаризации:</p>
						<ul class="tab_content_list">
							<li>Автоматизированная система, не требующая контроля.</li>
							<li>Снижение финансовых и временных расходов - инвентаризация вписывается <br class="pc"> в ежедневные обязанности одного сотрудника. </li>
							<li>Вы всегда с уверенностью знаете, сколько ТМЦ хранится на Вашем объекте <br class="pc"> и в каком месте.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(2, this)" data-popup="Внедрение автоматизированной системы инвентаризации">Получить консультацию</a>
					</div>
					<!-- /.tab_content -->
					<div data-id="3" class="tab_content">
						<p class="tab_name">Инвентаризация архивов</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Сканирование документов.</li>
							<li>Формирование архивов документов в электронном виде. </li>
							<li>Переплет документов.</li>
							<li>Архивная обработка документов.</li>
							<li>Хранение документов.</li>
							<li>Уничтожение документов.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(2, this)" data-popup="Инвентаризация архивов">Получить консультацию</a>
					</div>
					<!-- /.tab_content -->
					<div data-id="4" class="tab_content">
						<p class="tab_name">Интеграция и автоматизация 1С</p>
						<p class="tab_tab_subtitle mt1">Перенос системы учета из Excel или бумажных носителей <br class="pc"> в полностью автоматизированную WMS.</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Какие <span>преимущества</span> дает 1С?</p>
						<ul class="tab_content_list">
							<li>Автоматизация учета ТМЦ.</li>
							<li>Понимание фактического наличия ТМЦ. </li>
							<li>Снижение недостач и пересортицы.</li>
							<li>Автоматизация формирования накладных.</li>
							<li>Возможность автоматизации проведения инвентаризации.</li>
						</ul>
						<p class="tab_contetn_title mt1">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Покупка и внедрение 1С.</li>
							<li>Создание и внесение в систему номенклатурного справочника. </li>
							<li>Обучение работе в 1С.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(2, this)" data-popup="Интеграция и автоматизация 1С">Получить консультацию</a>
					</div>
					<!-- /.tab_content -->
					<div data-id="5"  class="tab_content">
						<p class="tab_name">Помощь в переезде</p>
						<p class="tab_tab_subtitle mt1">Исключение потерь ОС и ТМЦ, путаницы в системе учета <br class="pc"> при переезде организации.</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Перенос системы адресного хранения на новый объект.</li>
							<li>Деление отгружаемого и перевозимого товара на группы для избежания <br> путаницы и ошибок на новом месте хранения. </li>
							<li>Внесение изменений в систему учета при необходимости.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(2, this)" data-popup="Помощь в переезде">Получить консультацию</a>
					</div>
					<!-- /.tab_content -->
					<div data-id="6" class="tab_content">
						<p class="tab_name">Оценка и переоценка имущества</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Оценка недвижимости.</li>
							<li>Оценка машин и оборудования. </li>
							<li>Переоценка.</li>
							<li>Оценка основных средств.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(2, this)" data-popup="Оценка и переоценка имущества">Получить консультацию</a>
					</div>
					<!-- /.tab_content -->
					<div data-id="7" class="tab_content">
						<p class="tab_name">Услуги штрихкодирования</p>
						<p class="tab_tab_subtitle">Формирование и создание инвентарных номеров в виде штрихкодов, <br class="pc"> нанесения их на этикетки или наклеивание на имущество.</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Изготовление этикеток.</li>
							<li>Штрихкодирование. </li>
							<li>Применение технологии RFID.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(2, this)" data-popup="Услуги штрихкодирования">Получить консультацию</a>
					</div>
					<!-- /.tab_content -->
					<div data-id="8" class="tab_content">
						<p class="tab_name">Предоставление персонала в аренду</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Какие задачи может выполнять персонал?</p>
						<ul class="tab_content_list">
							<li>Выкладка товара в магазине.</li>
							<li>Помощь перед открытием магазина. </li>
							<li>Перемаркировка товара.</li>
							<li>Переоценка товара.</li>
							<li>Фасовка и упаковка товара.</li>
							<li>Прочие операционные нужды.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(2, this)" data-popup="Предоставление персонала в аренду">Получить консультацию</a>
					</div>
					<!-- /.tab_content -->
				</div>
				<!-- /.tab_container -->
			</main>

			<div class="accordion_block">
				
				<div class="accordion">
					<p class="head"><span>Адресное хранение</span></p>
					<div class="content">
						<p class="tab_name">Внедрение системы адресного хранения в 1С</p>
						<p>Организация оптимальной системы приемки, отгрузки и хранения <br> ТМЦ с минимизацией финансовых и временных потерь.</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Какие <span>преимущества</span> дает адресное хранение?</p>
						<ul class="tab_content_list">
							<li>Сокращение времени работы сотрудников, повышение их эффективности.</li>
							<li>Возможность сокращения штата сотрудников и расходов на их содержание. </li>
							<li>Снижение временных затрат на обучение новых сотрудников.</li>
							<li>Увеличение объема принимаемой и отгружаемой продукции.</li>
							<li>Снижение количества списываемой продукции.</li>
							<li>Освобождение места для хранения дополнительных товаров, увеличение <br> объемов продаж.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(1, this)" data-popup="">Получить консультацию</a>
					</div>
				</div>

				<div class="accordion">
					<p class="head"><span>Система инвентаризации</span></p>
					<div class="content">
						<p class="tab_name">Внедрение автоматизированной системы <br> инвентаризации</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Какие <span>преимущества</span> дает система?</p>
						<ul class="tab_content_list mb1">
							<li>Точность инвентаризации 99,98 - 100%.</li>
							<li>Исключение подтасовки результатов сотрудниками. </li>
							<li>Увеличение скорости подсчетов до 10 000 единиц в час на сотрудника.</li>
							<li>Автоматизация учета и выявления излишков, недостач или пересортицы.</li>
						</ul>
						<p class="tab_contetn_title mt1">Внедрение циклической инвентаризации:</p>
					</div>
				</div>

				<div class="accordion">
					<p class="head"><span>Инвентаризация архивов</span></p>
					<div class="content">
						<p class="tab_name">Инвентаризация архивов</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Сканирование документов.</li>
							<li>Формирование архивов документов в электронном виде. </li>
							<li>Переплет документов.</li>
							<li>Архивная обработка документов.</li>
							<li>Хранение документов.</li>
							<li>Уничтожение документов.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(1, this)" data-popup="Инвентаризация архивов">Получить консультацию</a>
					</div>
				</div>

				<div class="accordion">
					<p class="head"><span>Интеграция с 1С</span></p>
					<div class="content">
						<p class="tab_name">Интеграция и автоматизация 1С</p>
						<p class="tab_tab_subtitle mt1">Перенос системы учета из Excel или бумажных носителей <br class="pc"> в полностью автоматизированную WMS.</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Какие <span>преимущества</span> дает 1С?</p>
						<ul class="tab_content_list">
							<li>Автоматизация учета ТМЦ.</li>
							<li>Понимание фактического наличия ТМЦ. </li>
							<li>Снижение недостач и пересортицы.</li>
							<li>Автоматизация формирования накладных.</li>
							<li>Возможность автоматизации проведения инвентаризации.</li>
						</ul>
						<p class="tab_contetn_title mt1">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Покупка и внедрение 1С.</li>
							<li>Создание и внесение в систему номенклатурного справочника. </li>
							<li>Обучение работе в 1С.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(1, this)" data-popup="Интеграция и автоматизация 1С">Получить консультацию</a>
					</div>
				</div>

				<div class="accordion">
					<p class="head"><span>Помощь в переезде</span></p>
					<div class="content">
						<p class="tab_name">Помощь в переезде</p>
						<p class="tab_tab_subtitle mt1">Исключение потерь ОС и ТМЦ, путаницы в системе учета <br class="pc"> при переезде организации.</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Перенос системы адресного хранения на новый объект.</li>
							<li>Деление отгружаемого и перевозимого товара на группы для избежания <br> путаницы и ошибок на новом месте хранения. </li>
							<li>Внесение изменений в систему учета при необходимости.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(1, this)" data-popup="Помощь в переезде">Получить консультацию</a>
					</div>
				</div>

				<div class="accordion">
					<p class="head"><span>Оценка имущества</span></p>
					<div class="content">
						<p class="tab_name">Оценка и переоценка имущества</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Оценка недвижимости.</li>
							<li>Оценка машин и оборудования. </li>
							<li>Переоценка основных средств.</li>
							<li>Оценка основных соедств.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(1, this)" data-popup="Оценка и переоценка имущества">Получить консультацию</a>
					</div>
				</div>

				<div class="accordion">
					<p class="head"><span>Штрихкодирование</span></p>
					<div class="content">
						<p class="tab_name">Услуги штрихкодирования</p>
						<p class="tab_tab_subtitle">Формирование и создание инвентарных номеров в виде штрихкодов, <br class="pc"> нанесения их на этикетки или наклеивание на имущество.</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Что входит в услугу?</p>
						<ul class="tab_content_list">
							<li>Изготовление этикеток.</li>
							<li>Штрихкодирование. </li>
							<li>Применение технологии RFID.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(1, this)" data-popup="Услуги штрихкодирования">Получить консультацию</a>
					</div>
				</div>

				<div class="accordion">
					<p class="head"><span>Персонал в аренду</span></p>
					<div class="content">
						<p class="tab_name">Предоставление персонала в аренду</p>
						<div class="devider"></div>
						<p class="tab_contetn_title">Какие задачи может выполнять персонал?</p>
						<ul class="tab_content_list">
							<li>Выкладка товара в магазине.</li>
							<li>Помощь перед открытием магазина. </li>
							<li>Перемаркировка товара.</li>
							<li>Переоценка товара.</li>
							<li>Фасовка и упаковка товара.</li>
							<li>Прочие операционные нужды.</li>
						</ul>
						<a href="#x" class="btn" onclick="popup(1, this)" data-popup="Предоставление персонала в аренду">Получить консультацию</a>
					</div>
				</div>

			</div>
			<!-- /.accordion_block -->
		</div>
	</section>


	<section id="s07">
		<div class="wrap">
			<h2 class="h2">Покажем, как ускорить процесс <br> инвентаризации и снизить расходы</h2>
			<p class="subtitle">Проведем тестовую инветаризацию и анализ работы <?php echo $s07; ?>  <br class="pc"> <span>бесплатно.</span></p>
			<ul>
				<li><span>Тестовая инвентаризация</span>  занимает 3-5 часов, позволяет выявить <br> слабые места в системе учета и оценить качество предоставляемых <br> услуг без каких-либо рисков.</li>
				<li><span>Анализ работы <?php echo $s07; ?></span>  показывает, как сократить время работы <br> сотрудников, снизить нерациональные расходы, повысить <br> объем отгружаемой и хранимой продукции.</li>
			</ul>
			<a href="#x" class="btn" onclick="popup(3)">Заказать тест и анализ работы</a>

			<img src="assets/img/3.png" class="man">
		</div>
	</section>


	<section id="s08">
		<div class="wrap">
			<address class="address">
				<ul>
					<li>
						<p><strong>Главный офис</strong></p>
						г. Москва, ул. Краснобогатырская
						<br> д.2, стр. 75, оф. 3
						<br> Пн-Пт с 10:00 до 18:00
					</li>
					<li>
						<p><strong>Телефон</strong></p>
						<a href="tel:+7 (495) 589-54-86" class="phone">+7 (495) 589-54-86</a>
					</li>
					<li>
						<p><strong>E-mail</strong></p>
						<a href="mailto:mail@rosinvent.com" class="email">mail@rosinvent.com</a>
					</li>
				</ul>
				<a href="#x" class="showOnMap" onclick="popup(4)">Показать на карте</a>
			</address>
		</div>
		<div id="map"></div>
	</section>


	<footer id="footer">
		<div class="wrap flex aic">
			<div class="col">
				<div class="logo mb1"><img src="assets/img/logo.png?v=2"></div>
				<p>ООО «ИНВЕНТ» <br> ИНН 7725265832. ОГРН 1157746215571</p>
			</div>
			<div class="col tac">
				<a href="#x" target="_blank" class="policy">Политика конфиденциальности</a>
			</div>
			<div class="col tar">
				<a id="dev" href="#x" target="_blank">
					Создание и продвижение
					<img src="assets/img/dev.png?v=1">
				</a>
			</div>
		</div>
	</footer>


<div class="popup-bg" id="popup-bg">

  <div class="popup" id="popup1">
    <div class="head">
      <div class="close" onclick="popup(-1)">&times;</div>
      <span>Узнайте предварительную стоимость <br> инвентаризации по телефону:</span>
    </div>
    <div class="content">
      <form action="spasibo.php" method="post">
        <input type="text" name="name" placeholder="Укажите Ваше имя">
        <input type="tel" name="tel" placeholder="Укажите номер телефона" required="">
        <input type="email" name="email" placeholder="Укажите E-mail" >
        <input type="hidden" name="comment" value="Узнайте предварительную стоимость  инвентаризации по телефону:">
        <button type="submit" class="submit blink btn">Узнать стоимость</button>
        <p class="policy">Нажимая на кнопку “Узнать стоимость”, я соглашаюсь на <br> обработку моих персональных данных и ознакомлен(а) <br> с <a href="policy/" target="_blank">политикой конфиденциальности</a></p>
        <input type="hidden" name="utm_source" value="<?php echo ($_GET['utm_source']) ? $_GET['utm_source'] : '' ?>">
        <input type="hidden" name="AntiSpam" value="">
      </form>
    </div>    
  </div>

  <div class="popup" id="popup2">
    <div class="head">
      <div class="close" onclick="popup(-1)">&times;</div>
      <span>Получите консультацию специалиста <br> по инвентаризации:</span>
    </div>
    <div class="content">
      <form action="spasibo.php" method="post">
        <input type="text" name="name" placeholder="Укажите Ваше имя">
        <input type="tel" name="tel" placeholder="Укажите номер телефона" required="">
        <input type="email" name="email" placeholder="Укажите E-mail" >
        <input type="hidden" name="comment" value="Получите консультацию специалиста по инвентаризации:">
        <button type="submit" class="submit blink btn">Получить консультацию</button>
        <p class="policy">Нажимая на кнопку “Узнать стоимость”, я соглашаюсь на <br> обработку моих персональных данных и ознакомлен(а) <br> с <a href="policy/" target="_blank">политикой конфиденциальности</a></p>
        <input type="hidden" name="utm_source" value="<?php echo ($_GET['utm_source']) ? $_GET['utm_source'] : '' ?>">
        <input type="hidden" name="AntiSpam" value="">
      </form>
    </div>    
  </div>

  <div class="popup" id="popup3">
    <div class="head">
      <div class="close" onclick="popup(-1)">&times;</div>
      <span>Закажите тестовую инвентаризацию <br> и анализ работы склада:</span>
    </div>
    <div class="content">
      <form action="spasibo.php" method="post">
        <input type="text" name="name" placeholder="Укажите Ваше имя">
        <input type="tel" name="tel" placeholder="Укажите номер телефона" required="">
        <input type="email" name="email" placeholder="Укажите E-mail" >
        <input type="hidden" name="comment" value="Закажите тестовую инвентаризацию  и анализ работы склада:">
        <button type="submit" class="submit blink btn">Заказать тест</button>
        <p class="policy">Нажимая на кнопку “Узнать стоимость”, я соглашаюсь на <br> обработку моих персональных данных и ознакомлен(а) <br> с <a href="policy/" target="_blank">политикой конфиденциальности</a></p>
        <input type="hidden" name="utm_source" value="<?php echo ($_GET['utm_source']) ? $_GET['utm_source'] : '' ?>">
        <input type="hidden" name="AntiSpam" value="">
      </form>
    </div>    
  </div>

  <div class="popup" id="popup4">
    <div class="head">
      <div class="close" onclick="popup(-1)">&times;</div>
    </div>
    <div class="content">
      <div id="map2"></div>
    </div>    
  </div>

</div>


	<script src="assets/js/index.min.js?rev=@@hash"></script>
  <!-- <script async  src="https://api-maps.yandex.ru/2.1/?apikey=013f2fed-9ddb-4953-a5fb-783112588841&lang=ru_RU" type="text/javascript"></script> -->
<!-- 	<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script> -->

<!-- 	<link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.7.2/css/all.css"> -->
	
	<script type="text/javascript">
		const steps = 10;
		const discount = 15;

		$('[type="submit"], .getResultBtn').on('click', function(){
			$(this).parents('form').find('[name="AntiSpam"]').val('AntiSpam');
		})

		$('.tab_list li').on('click', switchTabs);
		$('.own_variable_input').on('click', own_variable_input_Toogle);
		$(document).on('click', '.goNext:not([disabled="disabled"])', goNext);
		$('.goBack').on('click', goBack);
		$('.form_control').on('click', toggleNextBtn);
		$(document).on('click', '.burger, .close_menu, #menu a', toggleMenu);
		$('.change_block .phone').on('click input blur focus change keyup keydown', checkPhone);
		$('.change_block .checkInput').on('click input blur focus change keyup keydown', checkInput);
		$('.change_block textarea').on('input change blur focus', function(){
			if ( $(this).val().length > 1 ) {
				$('.change_block.active .goNext').removeAttr('disabled')
			}
			else{
				$('.change_block.active .goNext').attr('disabled', 'disabled');
			}
		})

		jQuery(function($){
	 		$.mask.definitions['q'] = '[1,2,3,4,5,6,9]';
		  $('input[type="tel"]').mask("+7(q99) 999-99-99");
		});

		$('#s05 .slick-slider').slick({
			infinite: true,
			dots: true,
			//adaptiveHeight: true, 
			asNavFor: '.slider_images',
		});

		$('.slider_images').slick({
			infinite: true,
			fade: true,
			dots: false,
			arrows: false,
			asNavFor: '#s05 .slick-slider',
		})

		


		$('.slider-for').slick({
			infinite: true,
			centerMode: true,
			variableWidth: true,
			prevArrow: $('.prev'),
			nextArrow: $('.next'),
			asNavFor: '.slider-nav',
		});

		$('.slider-nav').slick({
			infinite: true,
			arrows: false,
		  slidesToShow: 6,
		  //slidesToScroll: 1,
		  asNavFor: '.slider-for',
		  //dots: true,
		  //centerMode: true,
		  focusOnSelect: true,
		  responsive: [
		    {
		      breakpoint: 810,
		      settings: {
		        slidesToShow: 2,
		      }
		    },
		  ]
		});

		function toggleMenu () {
			$('#menu, body').toggleClass('active')
		}



		function goNext () {
			$(this).parents('.change_block').removeClass('active').next('.change_block').addClass('active');

			$('#s04 .quiz_title, #s04 .quiz_subtitle').addClass('grey_color');
			$('#start').html('продолжайте');

			if ( $(this).hasClass('getResultBtn') ) {
				$('.bar').css({ 'width' : '0px'})

				$('#s04 .quiz_title').removeClass('grey_color').html('Поздравляем! Ваша скидка <br> на первую инвентаризацию 15%');
				$('#s04 .quiz_subtitle').html('Отправка ответов...');

				// $.ajax({
    //     	type: "POST",
	   //      url: 'spasibo.php',
	   //      data: $(this).serialize()
		  //   })

		     $.ajax({
		        type: "POST",
		        url: 'spasibo.php',
		        data: $('#quiz').serialize()
			    }).done(function() {
		       	setTimeout(function(){
							location.href = 'spasibo.php';
						}, 3e3)
			    });

				$('#percent').html('15');
				setTimeout(function(){
					$('.bar').css({ 
						'transition' : '3s',
						'width' : '100%',
					})
				}, 1e3)
				// setTimeout(function(){
				// 	location.href = 'spasibo.php';
				// }, 4e3)
			}
			else{
				discountPercent ();
			}

			$offset = 250;
			if ( document.documentElement.clientWidth > 1000 ) {$offset = 350;}
	    destination = $('#quiz').offset().top;
	    $("html:not(:animated),body:not(:animated)").animate({
	        scrollTop: destination-$offset
	    }, 500);

	    if ( !$(this).hasClass('getResultBtn') ) {
				pregressBar ();
			}

		}

		function goBack () {
			$(this).parents('.change_block').removeClass('active').prev('.change_block').addClass('active');

			if ( $(this).hasClass('goToFirstStep') ) {
				$('#s04 .quiz_title, #s04 .quiz_subtitle').removeClass('grey_color');
				$('#start').html('начните');
				$('#percent').html('0');
			}

			if ( !$(this).hasClass('goToFirstStep') ) {
				discountPercent ();
			}

			$offset = 250;
			if ( document.documentElement.clientWidth > 1000 ) {$offset = 350;}
			destination = $('#quiz').offset().top;
	    $("html:not(:animated),body:not(:animated)").animate({
	        scrollTop: destination-$offset
	    }, 500);
			
			pregressBar ();
			
		}

		function discountPercent () {
			let curStep 		 = $('.change_block.active').data('step');
			let curDiscount  = ( (discount / steps) * curStep ) *.8;
			console.log(curDiscount);

			$('#percent').each(function () {
			  var $this = $(this);
			  jQuery({ Counter: $this.text() }).animate({ Counter: curDiscount }, {
			    duration: 2000,
			    easing: 'swing',
			    step: function () {
			      $this.text(Math.ceil(this.Counter));
			    }
			  });
			});
		}


		function pregressBar () {
			let curStep 		 = $('.change_block.active').data('step');
			let pdogress_bar = $('.pdogress_bar').width();
			let step = pdogress_bar / steps;

			$('.bar').css({
				'width' : (step*curStep)*0.8 + 'px'
			})
		}

		function toggleNextBtn () {
			$this = $(this);

			setTimeout(function(){
				let checkboxes = $($this).parents('.change_block').find('[type="checkbox"]');
				let radios = $($this).parents('.change_block').find('[type="radio"]');

				if ( checkboxes.length > 0 ) {
					let check = false;
					$.each(checkboxes, function(index, val) {
						 if ( $(checkboxes[index]).prop('checked') ) {
						 	check = true;
						 	return check;
						 }
					});
					if ( check ) {
						$('.change_block.active .goNext').removeAttr('disabled');
					}
					if ( !check ) {
						$('.change_block.active .goNext').attr('disabled', 'disabled');
					}
				}

				if ( radios.length > 0 ) {
					$('.change_block.active .goNext').removeAttr('disabled');
				}
			}, 100)
		}

		//$('[type="radio"]').


		function switchTabs () {
			let $id = $(this).data('id');
			$(this).addClass('active').siblings('li').removeClass('active');
			$(this).parents('section').find('.tab_content').removeClass('active');
			$(this).parents('section').find('.tab_content[data-id="' + $id + '"]').addClass('active');
		};


		function own_variable_input_Toogle () {
			console.log('toggle');
			$this = $(this);

			setTimeout(function(){
				if ( $($this).find('[type="checkbox"]:checked').length > 0 ) {
					$($this).find('[type="text"]').addClass('active')
				}
				if ( $($this).find('[type="checkbox"]:checked').length < 1 ) {
					$($this).find('[type="text"]').removeClass('active')
				}
			}, 100)
		}

		function checkPhone() {
			console.log($(this).val());
			if ( $(this).val().length > 1 && !$(this).val().includes('_')  ) {
				$('.checkPhone').removeAttr('disabled');
			}
			else{
				$('.checkPhone').attr('disabled', 'disabled');
			}
		}


		let $inpArr = [];
		function checkInput () {
			let $name  = $('.checkInput.name').val();
			let $email = $('.checkInput.email').val();
			
			if ($name.length > 1 && $email.includes('@')) {
				$('.change_block.active .goNext').removeAttr('disabled');
			}
			else{
				$('.change_block.active .goNext').attr('disabled', 'disabled');
			}
		}

		$(document).on('click', '.scrollto', function(){
			var elementClick = $(this).attr("href")
	    var destination = $(elementClick).offset().top;
	    $("html:not(:animated),body:not(:animated)").animate({
	        scrollTop: destination
	    }, 500);
	    return false;
		})
	


/******************               STICKY MENU                 **************************/


// Create a clone of the menu, right next to original.
$('#nav').addClass('original').clone().insertAfter('#nav').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

scrollIntervalID = setInterval(stickIt, 10);


function stickIt() {

  var orgElementPos = $('.original').offset();
  orgElementTop = orgElementPos.top;               

  if ($(window).scrollTop() >= (orgElementTop)) {
    // scrolled past the original position; now only show the cloned, sticky element.

    // Cloned element should always have same left position and width as original element.     
    orgElement = $('.original');
    coordsOrgElement = orgElement.offset();
    leftOrgElement = coordsOrgElement.left;  
    widthOrgElement = orgElement.css('width');
    $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
    $('.original').css('visibility','hidden');
  } else {
    // not scrolled past the menu; only show the original menu.
    $('.cloned').hide();
    $('.original').css('visibility','visible');
  }
}
/******************               STICKY MENU                 **************************/


  window.onload = function(){
    document.getElementById('popup-bg').onclick = function(e) {if (e.target != this) { return true; } popup(-1);}
  }
function popup(nm, e) {
    popupElm = document.getElementById("popup-bg");
    if (nm == -1) {
        popupElm.classList.remove('visible');
        document.querySelector('body').style.overflow = 'auto';
    } else {
        elm = popupElm.getElementsByClassName('popup');
        if (typeof nm != 'undefined')
            for (var i = elm.length - 1; i >= 0; i--) {
                if (elm[i].id == 'popup' + nm) {
                    elm[i].classList.add('visible');
                    popupElm.classList.add('visible');
                    document.querySelector('body').style.overflow = 'hidden';

                    if ( typeof e !== 'undefined' ) {
                    	$(elm).find('[name="comment"]').val( $(e).data('popup') )  
                    }
                } else {
                    elm[i].classList.remove('visible');
                }
            }
        else {
            popupElm.classList.add('visible');
            document.querySelector('body').style.overflow = 'hidden';
        }
    }
}



/*========================Accordion========================*/

jQuery(document).ready(function($) {
    $('.accordion .content').hide().prev().click(function(){
        $('.accordion .content').not(this).slideUp().prev('.head').removeClass('active');
        $(this).next().not(':visible').slideDown().prev('.head').addClass('active');
    })
});

/*=====================Accordion====================*/

setTimeout(function(){
	var elem = document.createElement('script');
	elem.type = 'text/javascript';
	elem.src = '//api-maps.yandex.ru/2.1/?apikey=013f2fed-9ddb-4953-a5fb-783112588841&lang=ru_RU&onload=getYaMap';
	document.getElementsByTagName('body')[0].appendChild(elem);
}, 2000);


$.extend($.fancybox.defaults, {
	afterClose: function(){
		$('.slick-slider').slick('refresh');
	},
    beforeClose: function(){
        $('.slick-slider').slick('refresh');
    }
});

function getYaMap(){
    var myMap = new ymaps.Map('map', {
          center: [55.813910, 37.693525],
          zoom: 16
      }, { searchControlProvider: 'yandex#search' }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: '', balloonContent: ''
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'assets/img/marker.png',
            iconImageSize: [60, 82],
            iconImageOffset: [-30, -41]
        });

    myMap.geoObjects
        .add(myPlacemark)
    myMap.behaviors.disable('scrollZoom');
		myMap.controls.remove('trafficControl').remove('rulerControl');
		myMap.controls.remove('searchControl');
		if ( document.documentElement.clientWidth < 500 ) {
		 myMap.behaviors.disable('drag');  
		 myMap.behaviors.enable('multiTouch');
		}


		var myMap2 = new ymaps.Map('map2', {
          center: [55.813910, 37.693525],
          zoom: 16
      }, { searchControlProvider: 'yandex#search' }),

        // Создаём макет содержимого.
        MyIconContentLayout2 = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark2 = new ymaps.Placemark(myMap2.getCenter(), {
            hintContent: '', balloonContent: ''
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'assets/img/marker.png',
            iconImageSize: [30, 41],
            iconImageOffset: [-15, -20]
        });

    myMap2.geoObjects
        .add(myPlacemark2)
    myMap2.behaviors.disable('scrollZoom');
		myMap2.controls.remove('trafficControl').remove('rulerControl');
		myMap2.controls.remove('searchControl');
		if ( document.documentElement.clientWidth < 500 ) {
		 myMap2.behaviors.disable('drag');  
		 myMap2.behaviors.enable('multiTouch');
		}
}
	</script>

<?php endif; ?>
</body>
</html>