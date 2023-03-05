<!--This page loads when you enter something into a search form, which is displayed on 404.php-->
<?php 
        get_header();
    ?>
    
    <div class="main-wrapper">
		<article class="content px-3 py-5 p-md-5">
            
            <?php
             // loops through wordpress pages and displays the post and content.
                if( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                        //looks at file template parts and then looks for in this case, content and then looks for article if first search fails.
                        get_template_part('template-parts/content', 'archive')
                    }
                }
            ?>      

	    </article>
	    

    
    <?php 
        get_footer()
    ?>
   