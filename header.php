<?php
/**
 * Header (header.php)
 * @package WordPress
 * @subpackage Antares
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  	<meta name="google-site-verification" content="hfTfefxbL8FXYnUcLkqWwNNKHdlRCKKxUX1jaZTdEMo" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head();?>
  
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9032220952794982",
    enable_page_level_ads: true
  });
</script>
  
  
  
  
  <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '120859368597979');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=120859368597979&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

  
  
</head>
<body <?php body_class(); ?>>
<div id="top"></div>

<header class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 logotype">
					<a href="/">
						<strong>
							<?php bloginfo('name'); ?>
						</strong> 
						<span>
							<?php bloginfo('description'); ?>
						</span>
					</a>
				</div>
				<div class="col-md-8 col-sm-12 text-right">
					<nav class="navbar">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								Меню
							</button>
						</div>
						<div class="collapse navbar-collapse " id="topnav">
							<?php $args = array(
								'theme_location' => 'top', 
								'container'=> false,
						  		'menu_id' => 'top-nav-ul', 
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu navbar-right', 
						  		'walker' => new bootstrap_menu(true) 
					  			);
								wp_nav_menu($args);
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>