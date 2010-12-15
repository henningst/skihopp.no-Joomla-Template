<?php
/**
 * @version		$Id: index.php 19012 2010-09-29 05:56:19Z severdia $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHTML::_('behavior.mootools');

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />

		<!-- The following five lines load the Blueprint CSS Framework (http://blueprintcss.org). If you don't want to use this framework, delete these lines. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/print.css" type="text/css" media="print" />
		<!--[if lt IE 8]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection" />
    	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/joomla-nav/screen.css" type="text/css" media="screen" />
    	

		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

		<!-- The following four lines load the Blueprint CSS Framework and the template CSS file for right-to-left languages. If you don't want to use these, delete these lines. -->
		<?php if($this->direction == 'rtl') : ?>
			<!--link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/rtl/screen.css" type="text/css" />
			<!--link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" rel="stylesheet" type="text/css" />
		<?php endif; ?>

		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
	</head>
	<body>
		<div class="container">
			<hr class="space" />
			<div class="joomla-header span-16 append-1">
				<h1><?php echo $app->getCfg('sitename'); ?></h1>
			</div>
			<?php if($this->countModules('skihopp-search')) : ?>
				<div class="joomla-search span-7 last">
	  	 			<jdoc:include type="modules" name="skihopp-search" style="none" />
				</div>
			<?php endif; ?>
		</div>
		<?php if($this->countModules('skihopp-topmenu')) : ?>
			<jdoc:include type="modules" name="skihopp-topmenu" style="container" />
		<?php endif; ?>
			
		<?php if($this->countModules('skihopp-mainmenu')) : ?>
			<jdoc:include type="modules" name="skihopp-mainmenu" style="container" />
		<?php endif; ?>

		<?php if($this->countModules('skihopp-breadcrumbs')) :?>
			<div class="span-16 append-1">
			<jdoc:include type="modules" name="skihopp-breadcrumbs" style="none" />
			</div>
		<?php endif; ?>	
		<div class="container">
			<div class="span-16 append-1">
			<?php if($this->countModules('skihopp-topquote')) : ?>
				<jdoc:include type="modules" name="skihopp-topquote" style="none" />
			<?php endif; ?>
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			<?php if($this->countModules('skihopp-bottomleft')) : ?>
			 	<div class="span-7 colborder">
					<jdoc:include type="modules" name="skihopp-bottomleft" style="bottommodule" />
	        	</div>
	        <?php endif; ?>
	       
	        <?php if($this->countModules('skihopp-bottommiddle')) : ?>
				<div class="span-7 last">
	        		<jdoc:include type="modules" name="skihopp-bottommiddle" style="bottommodule" />
				</div>
			<?php endif; ?>
			</div>
			<?php if($this->countModules('skihopp-sidebar')) : ?>
				<div class="span-7 last">
	        		<jdoc:include type="modules" name="skihopp-sidebar" style="sidebar" />
				</div>
			<?php endif; ?>
			
			<div class="joomla-footer span-16 append-1">
				&copy;<?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>
			</div>
		</div>
	</body>
</html>
