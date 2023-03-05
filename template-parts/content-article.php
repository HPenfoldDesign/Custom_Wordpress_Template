<div class="container">
	<header class="content-header">
        <!--pulls in the date of which the post was created. Can be formatted to read different date formats-->
		<div class="meta mb-3"><span class="date"><?php the_date(); ?></span>
    

    <?php
    //imports tags with parametres - 1st before set of tags, 2nd what each individual tag starts with and 3rd how tag should end.
      the_tags('<span class="tag"><i class="fa fa-tag"></i>', '<span><span class="tag"><i class="fa fa-tag"></i>','</span>' );  
    ?>
      
        <span class="tag"><i class='fa fa-tag'></i> category</span>

        <!--displays how many comments have been made regarding particular article, look in comments.php-->
        <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number() ?></a></span></div>
	</header>

<?php
//imports the content of post to single.php
the_content();
?>

<?php
//imports comments page
    comments_template();
?>

</div>