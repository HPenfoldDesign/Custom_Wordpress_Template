<?php
    //scrips are being added through functions.php and added to html footer.
        wp_footer();
    ?>
<footer class="footer text-center py-2 theme-bg-dark">
		   
           <p class="copyright"><a href="#">Generic copyright</a></p>
           <?php 
			// calling in footer-1 widget made in functions.php
				dynamic_sidebar('footer-1');
			?>
        <?php 
        //adds a search form to footer.
        get_search_form();
        ?>
       </footer>
   
   </div>
</body>
</html> 