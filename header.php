<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
	<div class="header" id="myHeader">
		<!-- Header  -->
		<header class="hd">
			<div class="hd-lf">
				<form action="#">
      
      <button type="submit"><i class="fa fa-search"></i></button>
      <input type="text" placeholder="Search.." name="search" id="search">
    </form>
				
			</div>
			<div class="hd-rt">
				<ul>
					<li><a href="#"><img src="<?php echo get_theme_file_uri('\images\fb.png')?>"/></a></li>
					<li><a href="#"><img src="<?php echo get_theme_file_uri('\images\insta.png')?>"/></a></li>
					<li><a href="#"><img src="<?php echo get_theme_file_uri('\images\twitter.png')?>"/></a></li>
					<li><a href="#"><img src="<?php echo get_theme_file_uri('\images\pin.png')?>"/></a></li>
				</ul>
			</div>
		</header>

		<!-- Menus -->
		<section class="menus-sec">
			<div class="ms-lf">
				<h3>Turning Heads</h3>
			</div>
			<div class="ms-rt">
				

					
						
						<nav >
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					







					<!-- <ul>
					<li><a href="<?php get_page_link('index.html') ?>"><b>Home</b></a></li>
					<li><a href="<?php get_page_link('blog.html') ?>"><b>MyBlog</b></a></li>
					<li><a href="<?php get_page_link('about.html') ?>"><b>About</b></a></li>
					<li><a href="<?php echo get_page_link( get_page_by_title( index.html )->conta ); ?>"><b>Contact</b>  </a></li>
					<a href="<?php get_page_link('index.html#conta') ?>"><b>Contact</b></a>



					<li><a href="blog.html"><b>MyBlog</b></a></li>
					<li><a href="about.html"><b>About</b></a></li>
					<li><a href="index.html#conta"><b>Contact</b></a></li>
				</ul> -->

			</div>
		</section>
	</div>
