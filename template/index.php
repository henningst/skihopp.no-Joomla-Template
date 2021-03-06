﻿<?php
defined('_JEXEC') or die;


/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
  <jdoc:include type="head" />

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>skihopp.no - </title>
  <meta name="description" content="Romerike bakkesenter, Hurdal, Vær og føreforhold, diskusjonsgruppe, resultatlister, påmelding, bildegalleri, bruktmarked osv.">
  <meta name="author" content="Henning Støverud, http://www.stoverud.no">
  <meta name="keywords" content="skihopp, skihopp.no, skihopping, romerike bakkesenter, hurdal, bjørn støverud, hopp, hopping, skijumping, v-stil, resultatlister, skibilder, påmelding, diskusjon, linker, ski, vinter, wintersport, henning støverud, holmenkollen"> 
  
  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/apple-touch-icon.png">


  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->
 
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.6.min.js"></script>

</head>

<body>

  <div id="container">
    <header>
	
	<div id="headerContent">
	<h1>skihopp.no</h1>
	
	</div>
	
    </header>
    
	<nav id="siteNav">
		<div id="siteNavContent">
		Hjem | Nyheter | Resultater | Diskusjon | Om Sidene
		</div>
	</nav>
	
    <div id="main">
	
		<!-- BEGIN mainContent -->
		<div id="mainContent">
		Hei

	<?php if($this->countModules('skihopp-search')) : ?>
		<div class="joomla-search span-7 last">
			<jdoc:include type="modules" name="skihopp-search" style="none" />
		</div>
	<?php endif; ?>	
	
	
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


		
	
		<aside id="sidebar">
		
		<div id="asideContent">
			<div id="articleLists" class="asideBox">
			Box 1
			</div>
			
			<div id="twitterFeeds" class="asideBox">
			Box 2
			</div>
			
			<div id="externalFeeds" class="asideBox">
			Box 3
			</div>
		</div>
		
		</aside>
	
		</div>
		<!-- END mainContent -->
	
    </div>
    
	
    <footer>
		<div id="footerContent">
		&copy;<?php echo date('Y'); ?> skihopp.no
		</div>
    </footer>
  </div> <!--! end of #container -->



  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
  
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

  <!-- yui profiler and profileviewer - remove for production -->
  <script src="js/profiling/yahoo-profiling.min.js"></script>
  <script src="js/profiling/config.js"></script>
  <!-- end profiling code -->


  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
   var _gaq = [['_setAccount', 'UA-340541-1'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  
</body>
</html>