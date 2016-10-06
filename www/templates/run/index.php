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
				<jdoc:include type="modules" name="link-all-photos" style="mystyle" />	
				<jdoc:include type="modules" name="polog" style="mystyle" />	
				<jdoc:include type="modules" name="reviews" style="mystyle" />	
				<jdoc:include type="modules" name="support" style="mystyle" />	
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