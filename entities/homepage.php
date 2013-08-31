<div> 
						<?php
						$args = array( 'posts_per_page' => 6,'category'    => 407,'order'=> 'DESC', 'orderby' => 'post_date' );
						
						$postslist = get_posts( $args );
						foreach ($postslist as $post) :  setup_postdata($post); ?> 
						<div class="span3 container" style="margin-left:8%">
							<h2 class="posttitle"><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h2>


									<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permanent Link To', TDOMAIN);?> <?php the_title_attribute();?>">
										<?php the_post_thumbnail('thumbnail');?>
									</a>
                             <p class="date"><?php the_time('F j, Y') ?></p>
                             <?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
	  <?php $tags = get_the_tags(); if($tags)	{  ?>
								<p class="postmetadata"><span class="tags"><?php the_tags( __( 'Tags: ', 'buddypress' ), ', ', '<br />'); ?></span> <span class="comments"><?php comments_popup_link( __( 'No Comments &#187;', 'buddypress' ), __( '1 Comment &#187;', 'buddypress' ), __( '% Comments &#187;', 'buddypress' ) ); ?></span></p>
							<?php } else {?>
								<p class="postmetadata"><span class="comments"><?php comments_popup_link( __( 'No Comments &#187;', 'buddypress' ), __( '1 Comment &#187;', 'buddypress' ), __( '% Comments &#187;', 'buddypress' ) ); ?></span></p>
							<?php } ?>

						</div>
						<?php endforeach; ?>
 </div>