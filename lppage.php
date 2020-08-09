<?php 
/* Template Name: LP Page */ 

get_header("lp");
?>

<main id="primary" class="site-main">

		<section class="services">
			<h2 class="section-title"><?php the_field("services_title"); ?></h2>

			<?php
				$args = array(  
					'post_type' => 'service',
					'post_status' => 'publish',
					'posts_per_page' => -1, 
					'orderby' => 'date',
					'order'   => 'ASC',
				);
				$services = new WP_Query( $args );
				if ( $services->have_posts() ) {
					while ( $services->have_posts() ) {
					$services->the_post();
				?>
			<div class="service">
				<div class="service-info">
					<h3 class="service-title">
						<?php the_title(); ?>
					</h3>
					<p class="service-content">
						<?php the_content(); ?>
					</p>
				</div>
				<div class="service-image">
					<div class="service-icon">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</div>

			<?php
				} // end while
				} // end if
				wp_reset_query()
			?>
				
			<div class="services-button">
				<button class="contact-button">
				<?php 
				$link = get_field('services_button');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
				</button>
			</div>

		</section>

		<div class="separator"></div>

		<section class="case-studies">
			<h2 class="section-title"><?php the_field("case_studies_title"); ?></h2>

			<?php
				$args = array(  
					'post_type' => 'casestudy',
					'post_status' => 'publish',
					'posts_per_page' => -1, 
					'orderby' => 'date',
					'order'   => 'ASC',
				);
				$casestudies = new WP_Query( $args );
				if ( $casestudies->have_posts() ) {
					while ( $casestudies->have_posts() ) {
					$casestudies->the_post();
				?>
			<div class="case-study">
				<div class="case-study-image">
					<?php the_post_thumbnail('full', array('class' => 'case-study-stickimg')); ?>
				</div>
				<div class="case-study-info">
					<h4 class="case-study-subtitle">
						<?php the_field("case_study_subtitle"); ?>
					</h4>
					<div class="case-study-header">
						<h3 class="case-study-title">
							<?php the_title(); ?>
						</h3>
						<div class="case-study-link">
							<?php 
							$link = get_field('case_study_link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="case-study-url" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						</div>	
					</div>
					<div class="case-study-excerpt">
						<?php the_excerpt(); ?>
							</div>	
					<p class="show-more">Show more <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-point-down.png"></p>			
					<div class="case-study-content">
						<?php the_content(); ?>
					</div>
				</div>

			</div>

			<?php
				} // end while
				} // end if
				wp_reset_query()
			?>

			<div class="case-studies-button">
				<button class="contact-button">
				<?php 
				$link = get_field('case_studies_button');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
				</button>
			</div>

		</section>

	</main><!-- #main -->

<?php
get_footer();