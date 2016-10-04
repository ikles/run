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
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/owl.carousel.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" type="text/css" />
	<!--script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.12.0.min.js"></script-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/owl.carousel.js"></script>
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
			<jdoc:include type="modules" name="white-block" style="mystyle" />				
			<div class="main-content">						
				<jdoc:include type="modules" name="top-mnu" style="mystyle" />			
				<div class="festivals">
					<jdoc:include type="modules" name="festivals" style="mystyle" />
				</div><!--festivals-->
				<jdoc:include type="modules" name="about-home" style="mystyle" />			
				<jdoc:include type="modules" name="best-photos" style="mystyle" />					
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
				<jdoc:include type="modules" name="bot-mnu" style="mystyle" />				
				<div class="footer">
					<div class="w900">
						<div class="slogan-phones-mail-footer">
							<jdoc:include type="modules" name="slogan-footer" style="mystyle" />
							<jdoc:include type="modules" name="phones-footer" style="mystyle" />								
							<jdoc:include type="modules" name="mail-footer" style="mystyle" />							
						</div><!--slogan-phones-mail-footer-->								
						<div class="copy">
							<jdoc:include type="modules" name="copy" style="mystyle" />									
							<jdoc:include type="modules" name="counter" style="mystyle" />													
						</div>
					</div>	
				</div>
			</div><!--main-content-->					
		</div>
	</div>	
</div>
</body>
</html>