<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header(); ?>
<div class="slider-container">
    <input type="hidden" id="txt_slidespeed" value="<?php if (butterbelly_get_option('butterbelly_slide_speed') != '') { ?> <?php echo stripslashes(butterbelly_get_option('butterbelly_slide_speed')); ?>
           <?php } else { ?>3000<?php } ?>"/>  
    <div class="slider-wrapper">
        <!--Start Slider Wrapper-->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <?php if (butterbelly_get_option('butterbelly_slideimage1') != '') { ?>
                        <a href="<?php
                        if (butterbelly_get_option('butterbelly_Sliderlink1') != '') {
                            echo butterbelly_get_option('butterbelly_Sliderlink1');
                        }
                        ?>" >
                            <img  src="<?php echo butterbelly_get_option('butterbelly_slideimage1'); ?>" alt="Slide Image 1"/></a>
                    <?php } else { ?>
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpg" alt="Slide Image 1"/>
<?php } ?>
                    <div class="container_24">
                        <div class="grid_24">
                            <div class="flex-caption-wrapper">
                                <div class="flex-caption">
                                    <?php if (butterbelly_get_option('butterbelly_sliderheading1') != '') { ?>
                                        <h1><a href="<?php
                                            if (butterbelly_get_option('butterbelly_Sliderlink1') != '') {
                                                echo butterbelly_get_option('butterbelly_Sliderlink1');
                                            }
                                            ?>"><?php
                                                   $ink_head1 = butterbelly_get_option('butterbelly_sliderheading1');
                                                   echo substr($ink_head1, 0, 80);
                                                   if (strlen($ink_head1) > 80)
                                                       echo "...";
                                                   ?></a></h1>
                                    <?php } else { ?>
                                        <h1><a href="#"><?php _e('Welcome to Greentrek Tours', 'butterbelly'); ?></a></h1>
                                    <?php } ?>
                                    <?php if (butterbelly_get_option('butterbelly_sliderdes1') != '') { ?>
                                        <p>					   
                                            <?php
                                            $ink_desc1 = butterbelly_get_option('butterbelly_sliderdes1');
                                            echo substr($ink_desc1, 0, 250);
                                            if (strlen($ink_desc1) > 250)
                                                echo "...";
                                            ?>
                                        </p>
                                    <?php } else { ?>
                                        <p><?php _e('Whether you are travelling solo, with a partner or with a group, we warmly invite you to discover, explore and enjoy the vast array of sites and experiences that Ghana has to offer . Situated on the West Coast of Africa, Ghana takes pride in being one of the thriving democracies on the continent.', 'butterbelly'); ?></p>
                                    <?php } ?>
                                    <?php if (butterbelly_get_option('butterbelly_slider_button1') != '') { ?>
                                        <a class="slider-readmore" href="<?php
                                        if (butterbelly_get_option('butterbelly_Sliderlink1') != '') {
                                            echo butterbelly_get_option('butterbelly_Sliderlink1');
                                        }
                                        ?>"><?php echo stripslashes(butterbelly_get_option('butterbelly_slider_button1')); ?></a>
                                       <?php } else { ?>
                                        <a class="slider-readmore" href="<?php
                                        if (butterbelly_get_option('butterbelly_Sliderlink1') != '') {
                                            echo butterbelly_get_option('butterbelly_Sliderlink1');
                                        }
                                        ?>"><?php echo READ_MORE ?></a>
                                       <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>		  
</div>
</div>
<div class="clear"></div>
<style>
	.ceomsg{
		margin:-50px auto;
			width:70%;
		height:100px;
				
	}
	.ceomsg img{
		float:left;
	}
	.msgtxt{
		margin-top:20px;
		width:70%;
		height:130px;
		border-top:1px solid lightgray;
		border-bottom:1px solid lightgray;
		float:left;
		font-family:arial sans-serif;
		padding:8px;font-size:18px;
			
	}

</style>
<div class="ceomsg">
	 <img  src="<?php echo get_template_directory_uri(); ?>/images/msg.jpg" />
	 <div class="msgtxt"> It gives me great pleasure to welcome you to the green trek tours website.
		 These are exciting yet challenging economical periods in our nation and I hope our portal creates an opportunity for our valued visitors around the world to learn more about our leading-edge operations, tourist attractions, our various services, sustainability initiatives, and core values. This website is part of the external manifestation of our commitment to provide excellent 
		 services to all our stakeholders as well as to the wider public interested in our activities. </div>
	 
</div>
<br><br><br>
<div class="home_container">
    <div class="container_24">
        <div class="grid_24">
            <div class="home-content">
                <div class="feature-content">
                    <div class="grid_8 alpha">
                        <div class="feature-content-inner first">
                            <?php if (butterbelly_get_option('butterbelly_headline1') != '') { ?>
                                <h3>
                                    <a href="<?php
                                    if (butterbelly_get_option('butterbelly_feature_link1') != '') {
                                        echo butterbelly_get_option('butterbelly_feature_link1');
                                    }
                                    ?>"><?php echo stripslashes(butterbelly_get_option('butterbelly_headline1')); ?>
                                    </a>
                                </h3>
                            <?php } else { ?>
                                <h3><a href="#"><?php _e('HoneyMoon Packages', 'butterbelly'); ?></a></h3>
                            <?php } ?>
                            <span id="image"><?php if (butterbelly_get_option('butterbelly_fimg1') != '') { ?>
                                    <img src="<?php echo butterbelly_get_option('butterbelly_fimg1'); ?>" alt="First Feature Image" />
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/honeymoon.jpg" /><?php } ?></span>
                            <div class="feature-content-text">
                                <div class="circle">
                                    <?php if (butterbelly_get_option('butterbelly_circle_img1') != '') { ?>
                                        <a href="<?php
                                        if (butterbelly_get_option('butterbelly_feature_link1') != '') {
                                            echo butterbelly_get_option('butterbelly_feature_link1');
                                        }
                                        ?>"><img src="<?php echo butterbelly_get_option('butterbelly_circle_img1'); ?>" alt="First Feature Image" /></a>
                                       <?php } else { ?>
                                        <a href="#"></a><?php } ?></div>
                                <?php if (butterbelly_get_option('butterbelly_firstdesc') != '') { ?>
                                    <p><?php echo stripslashes(butterbelly_get_option('butterbelly_firstdesc')); ?></p>
                                <?php } else { ?>
                                    <p><?php _e('', 'butterbelly'); ?></p>
                                <?php } ?>
                            </div> </div>
                    </div>

                    <div class="grid_8">
                        <div class="feature-content-inner second">
                            <?php if (butterbelly_get_option('butterbelly_headline2') != '') { ?><h3><a href="<?php
                                    if (butterbelly_get_option('butterbelly_feature_link2') != '') {
                                        echo butterbelly_get_option('butterbelly_feature_link2');
                                    }
                                    ?>"><?php echo stripslashes(butterbelly_get_option('butterbelly_headline2')); ?></a></h3>
                                <?php } else { ?>
                                <h3><a href="#"><?php _e('Rentals', 'butterbelly'); ?></a></h3>
                            <?php } ?>
                            <span id="image"><?php if (butterbelly_get_option('butterbelly_fimg2') != '') { ?>
                                    <img src="<?php echo butterbelly_get_option('butterbelly_fimg2'); ?>" alt="Second Feature Image" />
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/rentals.jpg" /><?php } ?></span>
                            <div class="feature-content-text">
                                <div class="circle">
                                    <?php if (butterbelly_get_option('butterbelly_circle_img2') != '') { ?>
                                        <a href="<?php
                                        if (butterbelly_get_option('butterbelly_feature_link2') != '') {
                                            echo butterbelly_get_option('butterbelly_feature_link2');
                                        }
                                        ?>"><img src="<?php echo butterbelly_get_option('butterbelly_circle_img2'); ?>" alt="First Feature Image" /></a>
                                       <?php } else { ?>
                                        <a href="#"></a><?php } ?></div>
                                <?php if (butterbelly_get_option('butterbelly_seconddesc') != '') { ?>
                                    <p><?php echo stripslashes(butterbelly_get_option('butterbelly_seconddesc')); ?></p>
                                <?php } else { ?>
                                    <p><?php _e('', 'butterbelly'); ?></p>
                                <?php } ?>
                            </div></div>
                    </div>
                    <div class="grid_8 omega">
                        <div class="feature-content-inner second">
                            <?php if (butterbelly_get_option('butterbelly_headline2') != '') { ?><h3><a href="<?php
                                    if (butterbelly_get_option('butterbelly_feature_link2') != '') {
                                        echo butterbelly_get_option('butterbelly_feature_link2');
                                    }
                                    ?>"><?php echo stripslashes(butterbelly_get_option('butterbelly_headline2')); ?></a></h3>
                                <?php } else { ?>
                                <h3><a href="#"><?php _e('Tourism', 'butterbelly'); ?></a></h3>
                            <?php } ?>
                            <span id="image"><?php if (butterbelly_get_option('butterbelly_fimg2') != '') { ?>
                                    <img src="<?php echo butterbelly_get_option('butterbelly_fimg2'); ?>" alt="Second Feature Image" />
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/tourism.png" /><?php } ?></span>
                            <div class="feature-content-text">
                                <div class="circle">
                                    <?php if (butterbelly_get_option('butterbelly_circle_img2') != '') { ?>
                                        <a href="<?php
                                        if (butterbelly_get_option('butterbelly_feature_link2') != '') {
                                            echo butterbelly_get_option('butterbelly_feature_link2');
                                        }
                                        ?>"><img src="<?php echo butterbelly_get_option('butterbelly_circle_img2'); ?>" alt="First Feature Image" /></a>
                                       <?php } else { ?>
                                        <a href="#"></a><?php } ?></div>
                                <?php if (butterbelly_get_option('butterbelly_seconddesc') != '') { ?>
                                    <p><?php echo stripslashes(butterbelly_get_option('butterbelly_seconddesc')); ?></p>
                                <?php } else { ?>
                                    <p><?php _e('', 'butterbelly'); ?></p>
                                <?php } ?>
                            </div></div>
                    </div> <div class="grid_8 alpha">
                        <div class="feature-content-inner second">
                            <?php if (butterbelly_get_option('butterbelly_headline2') != '') { ?><h3><a href="<?php
                                    if (butterbelly_get_option('butterbelly_feature_link2') != '') {
                                        echo butterbelly_get_option('butterbelly_feature_link2');
                                    }
                                    ?>"><?php echo stripslashes(butterbelly_get_option('butterbelly_headline2')); ?></a></h3>
                                <?php } else { ?>
                                <h3><a href="#"><?php _e('Events Management', 'butterbelly'); ?></a></h3>
                            <?php } ?>
                            <span id="image"><?php if (butterbelly_get_option('butterbelly_fimg2') != '') { ?>
                                    <img src="<?php echo butterbelly_get_option('butterbelly_fimg2'); ?>" alt="Second Feature Image" />
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/evt.png" /><?php } ?></span>
                            <div class="feature-content-text">
                                <div class="circle">
                                    <?php if (butterbelly_get_option('butterbelly_circle_img2') != '') { ?>
                                        <a href="<?php
                                        if (butterbelly_get_option('butterbelly_feature_link2') != '') {
                                            echo butterbelly_get_option('butterbelly_feature_link2');
                                        }
                                        ?>"><img src="<?php echo butterbelly_get_option('butterbelly_circle_img2'); ?>" alt="First Feature Image" /></a>
                                       <?php } else { ?>
                                        <a href="#"></a><?php } ?></div>
                                <?php if (butterbelly_get_option('butterbelly_seconddesc') != '') { ?>
                                    <p><?php echo stripslashes(butterbelly_get_option('butterbelly_seconddesc')); ?></p>
                                <?php } else { ?>
                                    <p><?php _e('', 'butterbelly'); ?></p>
                                <?php } ?>
                            </div></div>
                    </div>
                    <div class="grid_8">
                        <div class="feature-content-inner second">
                            <?php if (butterbelly_get_option('butterbelly_headline2') != '') { ?><h3><a href="<?php
                                    if (butterbelly_get_option('butterbelly_feature_link2') != '') {
                                        echo butterbelly_get_option('butterbelly_feature_link2');
                                    }
                                    ?>"><?php echo stripslashes(butterbelly_get_option('butterbelly_headline2')); ?></a></h3>
                                <?php } else { ?>
                                <h3><a href="#"><?php _e('Hotel Reservations', 'butterbelly'); ?></a></h3>
                            <?php } ?>
                            <span id="image"><?php if (butterbelly_get_option('butterbelly_fimg2') != '') { ?>
                                    <img src="<?php echo butterbelly_get_option('butterbelly_fimg2'); ?>" alt="Second Feature Image" />
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/reservation.jpg" /><?php } ?></span>
                            <div class="feature-content-text">
                                <div class="circle">
                                    <?php if (butterbelly_get_option('butterbelly_circle_img2') != '') { ?>
                                        <a href="<?php
                                        if (butterbelly_get_option('butterbelly_feature_link2') != '') {
                                            echo butterbelly_get_option('butterbelly_feature_link2');
                                        }
                                        ?>"><img src="<?php echo butterbelly_get_option('butterbelly_circle_img2'); ?>" alt="First Feature Image" /></a>
                                       <?php } else { ?>
                                        <a href="#"></a><?php } ?></div>
                                <?php if (butterbelly_get_option('butterbelly_seconddesc') != '') { ?>
                                    <p><?php echo stripslashes(butterbelly_get_option('butterbelly_seconddesc')); ?></p>
                                <?php } else { ?>
                                    <p><?php _e('', 'butterbelly'); ?></p>
                                <?php } ?>
                            </div></div>
                    </div>
                    <div class=" grid_8 omega">
                        <div class="feature-content-inner third">
                            <?php if (butterbelly_get_option('butterbelly_headline3') != '') { ?><h3><a href="<?php
                                    if (butterbelly_get_option('butterbelly_feature_link3') != '') {
                                        echo butterbelly_get_option('butterbelly_feature_link3');
                                    }
                                    ?>"><?php echo stripslashes(butterbelly_get_option('butterbelly_headline3')); ?></a></h3>
                                <?php } else { ?>
                                <h3><a href="#"><?php _e('Pre-Vals Dinner', 'butterbelly'); ?></a></h3>
                            <?php } ?>
                            <span id="image"><?php if (butterbelly_get_option('butterbelly_fimg3') != '') { ?>
                                    <img src="<?php echo butterbelly_get_option('butterbelly_fimg3'); ?>" alt="Third Feature Image" />
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/dinner.jpg" /><?php } ?></span>
                            <div class="feature-content-text">          
                                <div class="circle">
                                    <?php if (butterbelly_get_option('butterbelly_circle_img3') != '') { ?>
                                        <a href="<?php
                                        if (butterbelly_get_option('butterbelly_feature_link3') != '') {
                                            echo butterbelly_get_option('butterbelly_feature_link3');
                                        }
                                        ?>"><img src="<?php echo butterbelly_get_option('butterbelly_circle_img3'); ?>" alt="First Feature Image" /></a>
                                       <?php } else { ?>
                                        <a href="#"></a><?php } ?></div>
                                <?php if (butterbelly_get_option('butterbelly_thirddesc') != '') { ?>
                                    <p><?php echo stripslashes(butterbelly_get_option('butterbelly_thirddesc')); ?></p>
                                <?php } else { ?>
                                    <p><?php _e('', 'butterbelly'); ?>
                                    </p>
                                <?php } ?>
                            </div></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="feature_blog_content">
                    <?php if (butterbelly_get_option('inkthemes_blog_heading') != '') { ?>
                        <h2><?php echo stripslashes(butterbelly_get_option('inkthemes_blog_heading')); ?></h2>
                    <?php } else { ?>
                        <h2><?php _e('Hotels', 'butterbelly'); ?></h2>
                    <?php } ?>
                    <?php if (butterbelly_get_option('inkthemes_blog_desc') != '') { ?>
                        <p class="short_desc"><?php echo stripslashes(butterbelly_get_option('inkthemes_blog_desc')); ?></p>
                    <?php } else { ?>
                        <p class="short_desc"><?php _e('', 'butterbelly'); ?></p>
                    <?php } ?>			 
                    <ul>
                        <?php
                        $args = array(
                            'post_status' => 'publish',
                            'posts_per_page' => 10,
                            'order' => 'DESC',
                            'post_type'=>'page',
                            'meta_query' => array(
                                array(
                                    'key' => '_thumbnail_id',
                                    'compare' => 'EXISTS'
                                ),
                            )
                        );
                        $query = new WP_Query($args);
                        ?>
                        <?php if (have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                                <?php
                                $content = $post->post_content;
                                $searchimages = '~<img [^>]* />~';
                                /* Run preg_match_all to grab all the images and save the results in $pics */
                                preg_match_all($searchimages, $content, $pics);
                                // Check to see if we have at least 1 image
                                $iNumberOfPics = count($pics[0]);
                                if (($iNumberOfPics > 0) || (has_post_thumbnail())) {
                                    ?>	
                                    <li class="post_home">
                                        <div class="">                                        
                                            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>                                            
                                        </div>
                                        <div class="post_content">                
                                            <?php the_post_thumbnail('full'); ?>
                                        </div>
                                    </li>
                                    <?php
                                } endwhile;
                            wp_reset_query();
                        else:
                            ?>
                            <li>
                                <p>
                                    <?php echo SORRY_NO_POST_MATCHED; ?>
                                </p>
                            </li>
                        <?php endif;
                        ?>
                    </ul>
                </div>	
            </div>			
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
</div>
<?php
get_footer();
?>
