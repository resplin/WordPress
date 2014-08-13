<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

		<!-- Bootstrap -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="blog-masthead">
			<div class="container">
				<nav class="blog-nav">
					<?php
						$pages = get_pages(array( 'exclude' => 95 ));
						foreach ( $pages as $page )
						{
							$text = '<a class="blog-nav-item" href="' . get_page_link( $page->ID ) . '">';
							$text .= $page->post_title;
							$text .= '</a>';
							
							echo $text;
						}
					?>
				</nav>
			</div>
		</div>

		<div class="container">

			<div class="blog-header">
				<h1 class="blog-title"><a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<p class="lead blog-description">I didn't know I couldn't do that.</p>
			</div>