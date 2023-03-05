
<!--Original totorial available at https://www.youtube.com/watch?v=-h7gOJbIpmo&t=7040s-->
<!--Index.html is effectly a fallback page to front-page.php-->
<?php 
        get_header();
    ?>
    
    <div class="main-wrapper">
		<article class="content px-3 py-5 p-md-5">
            
            <?php
             // You need to create some posts so this page can display something.
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
	    

    <!--go to settings => reading, you can change the amount of blog shows. so you can see how many manges of links you have. 
    For example you can do 4 posts per page and have 12 blogs total which would be 3 pages of 4. This is set upo for pagination purposes. -->

    <?php
    //adds pagination on posts page so you can pick different pages. 
    the_posts_pagination(); 
    ?>
    <?php 
        get_footer()
    ?>
   