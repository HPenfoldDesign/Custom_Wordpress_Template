<div class="container">

<!--first create a custom pages under pages name it something like 'blog'-->
<!--settings => reading and change posts page to the blog page you made. -->
<!--go into Appearance => menus add the 'blog' page to the menu strcuture add a class to style that menu tab.--> 

<div class="post mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" 
                        src="<?php //references the post thumnail url, by specifying thumbnail the image is rescaled to a 'thumbnail' image. These settings come from settings => Media settings => Thumbnail size.
                        the_post_thumbnail_url('thumbnail'); ?>" 
                        alt="image">
					    
                        <div class="media-body">
						    <h3 class="title mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						    <div class="meta mb-1"><span class="date"><?php the_date(); ?></span><span class="time">5 min read</span><span class="comment"><a href="#"><?php comments_number(); ?>s</a></span></div>
						    <div class="intro"><?php the_excerpt(); ?></div>
						    <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>


<?php
//imports the content of post to single.php
the_excerpt();
?>


</div>