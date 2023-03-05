<!--404.html is effectly a page that is sent to the user by default when a link doesnt load-->
<?php 
        get_header();
    ?>

		<article class="content px-3 py-5 p-md-5">
               
        <h1>404 - Page Not Found</h1>

        <?php 
        //adds a search form.
        get_search_form();
        ?>

	    </article>
	    
    <?php 
        get_footer()
    ?>