<?php

// No direct access.
defined('_JEXEC') or die;
JLoader::import('joomla.filesystem.file');
//JHtml::_('behavior.framework', true);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-mobile-web-app-capable" content="YES" />
	<jdoc:include type="head" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="templates/<?php echo $this->template;?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->template;?>/template.css?v=<?php echo date('i:s'); ?>" />
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<!-- <script src="templates/<?php echo $this->template;?>/js/parallax.min.js"></script> -->
    <script src="templates/<?php echo $this->template;?>/js/wow.js"></script>
	<script src="templates/<?php echo $this->template;?>/js/solmedia.js?v=<?php echo date('i:s'); ?>"></script><link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link href="/templates/<?php echo $this->template;?>/favicon.png" rel="shortcut icon" />
</head>
<?php
$app = JFactory::getApplication();
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$tytul = $app->get('sitename');
if ($itemid == '101') {
	$front = 1;
	$doc =& JFactory::getDocument();
	$doc->setTitle($tytul);
};
$contentParams = $app->getParams('com_content');
$pageClass = $contentParams->get('pageclass_sfx'); ?>
<body class="<?php echo $option . " view-" . $view . " task-" . $task . " itemid-" . $itemid . " body__" . $pageClass;?>">
	<nav id="header" >
		<div id="" class="container">
			<div id="" class="row">
				<div id="logo" class="col-md-3 col-xs-9">
					<a href="./"><img src="images/logo.png" alt="logo"></a>
				</div>
				<div id="menu" class="col-md-9 col-xs-3">
					<div class="pull-right">
						<jdoc:include type="modules" name="menu" />
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	<?php if ($front=='1'): ?>
	<section id="slider" class="parallax-window" data-parallax="scroll" data-image-src="/images/banner.jpg">
		<div class="container">
			<div class="ramka">
				<jdoc:include type="modules" name="wyjasnienie" />
			</div>
		</div>
	</section>
	
	<?php else: ?>
	<div id="tlo">
	</div>
        <section id="breadcrumbs">
		<div class="container">
			<jdoc:include type="modules" name="breadcrumbs"  />
		</div>
	</section>
	<section id="podstrona" >
		<div id="" class="container">
			<div id="" class="row">
				<div id="trescPodstrona" class="col-md-<?php if ($this->countModules( 'right' )) : ?>9<?php else:?>12<?php endif;?>">
					<jdoc:include type="message" /><jdoc:include type="component"  />
				</div>
				<?php if ($this->countModules( 'right' )) : ?>
				<div id="right" class="col-md-3">
					<jdoc:include type="modules" name="right" style="xhtml" />
				</div>
				<?php endif;?>
			</div>
		</div>		
	</section>
	<?php endif; ?>
	<section id="stopkaBig" >
		<div id="" class="container">
			<div id="" class="row">
				<div id="" class="col-md-4">
					<jdoc:include type="modules" name="bottom-1" style="xhtml" /> 
				</div>
				<div id="" class="col-md-4">
					<jdoc:include type="modules" name="bottom-2" style="xhtml" />
				</div>
				<div id="" class="col-md-4">
					<jdoc:include type="modules" name="bottom-3" style="xhtml" /> 
				</div>
			</div>
		</div>
	</section>
	<section id="stopka" >
		<div id="" class="container">
			<div id="" class="row">
				<div id="" class="col-xs-6">
					© <?php echo $tytul." ".date('Y'); ?>  
				</div>
				<div id="" class="col-xs-6">
					<div id="" class="pull-right">
						Wykonanie: Solmedia.pl
						<jdoc:include type="modules" name="footer" style="xhtml" />
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<jdoc:include type="modules" name="debug" />
</body>
</html>