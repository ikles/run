<?php
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" type="text/css" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.12.0.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/common.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="top">
			<div class="w900">
				<jdoc:include type="modules" name="top-social" style="mystyle" />				
				<jdoc:include type="modules" name="top-slogan" style="mystyle" />				
				<jdoc:include type="modules" name="top-phones" style="mystyle" />
				</div>	
			</div>
			<div class="content">			
				<a href="/" class="logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/logo.png" alt=""></a>
				<div class="white-block w900"></div>
				<div class="main-content">						
					<div class="top-mnu w900">
						<div class="">
							<ul>
								<li class="graf">
									<a href="#">
										<span>График фестивалей</span>
									</a>
									<span>Небольшой 
										вводный текст 
										желательно на 
										3 строки 7-8 слов</span>
									</li>
									<li class="zayav"><a href="#"><span>Заявка на участие</span></a><span>Небольшой 
										вводный текст 
										желательно на 
										3 строки 7-8 слов</span>
									</li>
									<li class="zaoch"><a href="#"><span>Заочный конкурс</span></a><span>Небольшой 
										вводный текст 
										желательно на 
										3 строки 7-8 слов</span>
									</li>
									<li class="olimp"><a href="#"><span>Олимпиада</span></a><span>Небольшой 
										вводный текст 
										желательно на 
										3 строки 7-8 слов</span>
									</li>
									<li class="onas"><a href="#"><span>О нас</span></a><span>Небольшой 
										вводный текст 
										желательно на 
										3 строки 7-8 слов</span>
									</li>
									<li class="gal"><a href="#"><span>Галерея</span></a><span>Небольшой 
										вводный текст 
										желательно на 
										3 строки 7-8 слов</span>
									</li>
								</ul>
							</div>
						</div><!--top-mnu-->
						<div class="festivals">
							<div class="w900 fest">
								<h3>Фестивали в ближайшее время</h3>
								<div class="text-mod fest">
									<ul>
										<li>
											<a href="#">
												<span class="img-fest"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/fest1.jpg" alt=""></span>											
												<span class="text-fest">
													Москва <br>
													<span>25 - 29 марта</span>											
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="img-fest"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/fest1.jpg" alt=""></span>											
												<span class="text-fest">
													Рязань <br>
													<span>25 - 29 марта</span>											
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="img-fest"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/fest1.jpg" alt=""></span>											
												<span class="text-fest">
													Сочи <br>
													<span>25 - 29 марта</span>											
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="img-fest"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/fest1.jpg" alt=""></span>											
												<span class="text-fest">
													Москва <br>
													<span>25 - 29 марта</span>											
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div><!--festivals-->
						<div class="about-home w900">
							<h3>О Центре «Образование и культура мира»</h3>
							<div class="text-mod">
								<div class="img-about">
									<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/unesco.png" alt=""></a>
								</div>
								<div class="text-about"><p>
									Некоммерческое Образовательное Учреждение Центр «Образование и культура мира» основано в Москве в 1997 году. Деятельность Центра (рег. свид. № 066.270 от 2 июля 1997 г.) началась с проекта «Учим и учимся миру», реализованного при поддержке Комитета общественных и межрегиональных связей, Мэрией г. Москвы и лично Швецовой Людмилой Ивановной.
								</p>
								<a href="#" class="about-more">Подробнее »</a>
							</div>								
						</div>
					</div><!--about-home-->
					<div class="best-photos">
						<h3>Лучшие фотографии</h3>
						<div class="text-mod">
							<ul>
								<li class="arr arrl"><a href="#"></a></li>
								<li><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/best1.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/best2.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/best3.jpg" alt=""></a></li>
								<li class="arr arrr"><a href="#"></a></li>
							</ul>
							<a href="#" class="all-photos">Все фото»</a>
						</div>
					</div><!--best-photos-->
					<div class="polog w900">
						<h3>ПОЛОЖЕНИЯ И Номинации фестиваля-конкурса</h3>
						<div class="text-mod">
							<ul>
								<li>
									<a href="#">
										<span class="img-polog"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/hor.png" alt=""></span>
										<span class="txt-polog">
											<span class="head-polog">хореография</span>
											<span class="text-polog">Некоммерческое Образовательное Учреждение Центр «Образование и культура мира» основано в Москве </span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="img-polog"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/voc.png" alt=""></span>
										<span class="txt-polog">
											<span class="head-polog">хореография</span>
											<span class="text-polog">Некоммерческое Образовательное Учреждение Центр «Образование и культура мира» основано в Москве </span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="img-polog"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/instr.png" alt=""></span>
										<span class="txt-polog">
											<span class="head-polog">хореография</span>
											<span class="text-polog">Некоммерческое Образовательное Учреждение Центр «Образование и культура мира» основано в Москве </span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="img-polog"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/teatr.png" alt=""></span>
										<span class="txt-polog">
											<span class="head-polog">хореография</span>
											<span class="text-polog">Некоммерческое Образовательное Учреждение Центр «Образование и культура мира» основано в Москве </span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="img-polog"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/cirk.png" alt=""></span>
										<span class="txt-polog">
											<span class="head-polog">хореография</span>
											<span class="text-polog">Некоммерческое Образовательное Учреждение Центр «Образование и культура мира» основано в Москве </span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="img-polog"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/hory.png" alt=""></span>
										<span class="txt-polog">
											<span class="head-polog">хореография</span>
											<span class="text-polog">Некоммерческое Образовательное Учреждение Центр «Образование и культура мира» основано в Москве </span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="img-polog"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/rech.png" alt=""></span>
										<span class="txt-polog">
											<span class="head-polog">хореография</span>
											<span class="text-polog">Некоммерческое Образовательное Учреждение Центр «Образование и культура мира» основано в Москве </span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="img-polog"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/izo.png" alt=""></span>
										<span class="txt-polog">
											<span class="head-polog">хореография</span>
											<span class="text-polog">Некоммерческое Образовательное Учреждение Центр «Образование и культура мира» основано в Москве </span>
										</span>
									</a>
								</li>
							</ul>
						</div><!--text-mod-->
						<a href="#" class="all-nom">Все номинации»</a>
					</div><!--polog -->
					<div class="reviews w900">
						<h3>Отзывы</h3>
						<div class="text-mod">
							<ul>
								<li>
									<div class="img-date-reviews">
										<span class="img-reviews"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/review1.jpg" alt=""></span>
										<span class="date-reviews">27.02.2016</span>
									</div>
									<div class="text-reviews">
										<h4>Павел Брюн</h4>
										<p>Здравствуйте! Фестиваль прошел, по мнению участников и родителей студии "Премиум", на отлично! Хороший отель, вкусная еда, доброжелательное отношение персонала к детскому коллективу.</p>
										<a href="#" class="more-reviews">Еще отзывы»</a>
									</div>
								</li>
								<li>
									<div class="img-date-reviews">
										<span class="img-reviews"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/review1.jpg" alt=""></span>
										<span class="date-reviews">27.02.2016</span>
									</div>
									<div class="text-reviews">
										<h4>Павел Брюн</h4>
										<p>Здравствуйте! Фестиваль прошел, по мнению участников и родителей студии "Премиум", на отлично! Хороший отель, вкусная еда, доброжелательное отношение персонала к детскому коллективу.</p>
										<a href="#" class="more-reviews">Еще отзывы»</a>
									</div>
								</li>
								<li>
									<div class="img-date-reviews">
										<span class="img-reviews"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/review1.jpg" alt=""></span>
										<span class="date-reviews">27.02.2016</span>
									</div>
									<div class="text-reviews">
										<h4>Павел Брюн</h4>
										<p>Здравствуйте! Фестиваль прошел, по мнению участников и родителей студии "Премиум", на отлично! Хороший отель, вкусная еда, доброжелательное отношение персонала к детскому коллективу.</p>
										<a href="#" class="more-reviews">Еще отзывы»</a>
									</div>
								</li>
							</ul>
						</div>	
					</div><!--reviews-->
					<div class="support w900">
						<h3>При поддержке</h3>
						<div class="text-mod">
							<ul>
								<li class="arr- arr-l"><a href="#"></a></li>
								<li><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/support1.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/support2.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/support3.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/support4.jpg" alt=""></a></li>
								<li class="arr- arr-r"><a href="#"></a></li>
							</ul>
						</div>
					</div><!--support-->
					<div class="bot-mnnu">
						<ul>							
							<li><a href="#">График фестивалей</a></li>
							<li><a href="#">Заявка</a></li>
							<li><a href="#">Заочный конкурс</a></li>
							<li class="active"><a href="#">Олимпиада</a></li>
							<li><a href="#">О нас</a></li>
							<li><a href="#">Галерея</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</div><!--bot-mnnu-->
					<div class="footer">
						<div class="w900">
							<div class="slogan-phones-mail-footer">
								<div class="slogan-footer">
									<p><span>Центр «Образование и культура мира»  </span>
										г. Москва, ул. Новая Басманная, дом 12, строение 2</p>
									</div>
									<div class="phones-footer">
										<p>+7 (495) 221-26-98 <br>
											+7 (925) 02-02-855
										</p>
									</div>
									<div class="mail-footer">
										<a href="mailto:ecpc@mail.ru">ecpc@mail.ru</a>
									</div>
								</div><!--slogan-phones-mail-footer-->
								<div class="copy">
									<p>© 2016 Центр «Образование и культура мира». Все права защищены</p>
									<div class="counter"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/counter.jpg" alt=""></div>
								</div>
							</div>	
						</div>
					</div><!--main-content-->					
				</div>
			</div>	
		</div>
	</body>
	</html>