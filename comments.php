<div class="comments-wrapper">


					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
							    <?php	
                                    if( ! have_comments()) {
                                        "Leave a comment";
                                    } else{
                                        get_comments_number(). " Comments";
                                    }
                                ?>

						</div><!-- .comments-header -->

						<div class="comments-inner">

						<?php 
                            //this will impoort all comments. wp_list_comments() take on many many different params.
                            wp_list_comments(
                                array(
                                    'avatar_size' => 120,
                                    'style' => 'div'
                                )
                            )    
                        ?>

						</div><!-- .comments-inner -->

					</div><!--comments can be automatically approve via wp dashboard => comments, but when starting from scratch comments need to be allowed by author-->
                        <!--You can add additional style using a custom walker-->
					<hr class="" aria-hidden="true">
					    <?php
                            if(comments_open()) {
                                comment_form(
                                    array(
                                        'class_form' => '',
                                        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                                        'title_reply_after' => '</h2>'
                                    )
                                );
                                  
                            }


                        ?>

				</div>