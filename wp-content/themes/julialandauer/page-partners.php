<?php
/**
 *
 * This is the template for the partners page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="partners-page">

				<?php while ( have_posts() ) : the_post(); ?>

					
					
					<?php get_template_part( 'content', 'page' ); ?>

					<div class="partners-page__reasons">
						<h1 class="partners-page__reasons--title">Learn More About Partnering With Julia</h1>
							<div class="partners-page__reasons--meaning">
								<h2 class="partners-page__reasons--title">What It Means</h2>
									<p>
										<!-- Load the partners/history text -->
										<?php  echo get_post_meta($post->ID, 'partners-meaning', true); ?>
									</p>
							</div>
							<div class="partners-page__reasons--why">
								<h2 class="partners-page__reasons--title">Why You Should</h2>	
									<p>
										<!-- Load the partners text -->
										<?php  echo get_post_meta($post->ID, 'partners-why', true); ?>
									</p>
							</div>
					</div>

					<div class="partners-page__sponsor-grid">
							<!-- Load -->
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-1', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-2', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-3', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-4', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-5', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-6', true); ?>" class="partners-page__sponsor-grid--logo" />
					</div>

					<div class="partners-page__partner-photos">
						<h1 class="partners-page__partner-photos--title">Sponsor Events</h1>
						<?php putRevSlider(3) ?>
					</div>

					<div class="partners-page__actions">
							<div class="partners-page__actions--content">
								<h2 class="partners-page__actions--title">What It Means</h2>
									<p>
										<!-- Load the partners/history text -->
										<?php  echo get_post_meta($post->ID, 'content', true); ?>
									</p>
							</div>
							<div class="partners-page__actions--partner-with-julia">
								<h2 class="partners-page__actions--title">Want To Partner With Julia?</h2>	
									<p>
										<!-- Load the partners text -->
										<?php  echo get_post_meta($post->ID, 'partner-with-julia', true); ?>
									</p>
									<a href="<?php echo site_url(); ?>/contact"><button>Contact</button></a>
							</div>
					</div>					

				<?php endwhile; // end of the loop. ?>

			</div><!-- /partners-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>