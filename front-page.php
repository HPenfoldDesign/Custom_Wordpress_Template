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
                        the_content();
                    }
                }
            ?>      

	    </article>
	    
        <!--video continues 1:16:16-->
    
    <?php 
        get_footer()
    ?>
   

