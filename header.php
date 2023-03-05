<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 
    
	<?php 
    //scrips are being added through functions.php and added to html head.
    wp_head();
    ?>

</head> 

<body>
    
    <header class="header text-center">	    
		<!--reference site title on site page.Site title selected in wp-->
	    <a class="site-title pt-lg-4 mb-0" href="index.html"><?php echo get_blog_info('name') ?></a>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >

			
			<?php 
				//gives you the ability to add custom logo which you can selecy via customise => logo
				if(function_exists('the_custom_logo')) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
			?>

				<img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >
                
                <?php 
                // this creates the primary wordpress menu with the ul classes atteched.
                // to add classes to the li's you go into appearance => menus => Boxes section CSS classes and link target, and then reference the class you want to use in the menu strucuture page link, in this case nav-item
                // to add the classes on the inner li a tags, you would need something called a custom 'walker' to do that.
                // for the icons <i> you can addthem straight into the menu page link => navigation label. This is the easiest way without creating a walker.
                    wp_nav_menu(
                        array(
                            'menu' => 'primary'
                            'container' => '';
                            'theme_location' => 'primary'
                            'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                        )
                    );
                ?>
				
				<!-- <ul class="navbar-nav flex-column text-sm-center text-md-left">
					<li class="nav-item active">
					    <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="post.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Blog Post</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="page.html"><i class="fas fa-file-image fa-fw mr-2"></i>Blog Page</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="archive.html"><i class="fas fa-archive fa-fw mr-2"></i>Blog Archive</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link btn btn-primary" href="contact.html"><i class="fas fa-envelope fa-fw mr-2"></i>Contact Us</a>
					</li>
				</ul> -->


				<hr>
				<!--the ul and classes are added in functions.php to the widget----------------->
				<!-- <ul class="social-list list-inline py-3 mx-auto">-->
					<!--the list data is added into the text widget on the backend of wp, soyou can add and remove social links.---------------->
					<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
				</ul> -->
			
			
			<?php 
			// calling in sidebar-1 widget made in functions.php
				dynamic_sidebar('sidebar-1')
			?>
			</div>

	

		</nav>
    </header>
    <header class="page-title theme-bg-light text-center gradient py-5">
            <!--displays current page title-->
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>