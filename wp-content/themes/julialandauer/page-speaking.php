<?php
/**
 *
 * This is the template for the speaking page.
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="speaking-page">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<div class="speaking-page__video-hero-wrapper">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/oXF2m-sG37Y" frameborder="0" allowfullscreen></iframe>
					</div>

					<div class="speaking-page__topics">
						<h2 class="speaking-page__topics--title">Events &amp; Speaking</h2>
						<p class="speaking-page__topics--intro">Julia wants to provide your organization with the most possible value by tailoring her speaking to your needs. Julia is generally available for keynotes, panel discussions, and small group workshops.</p>

                        <?php if (get_post_meta($post->ID, 'speaking-topic-one-title', true) != '') : ?>
                            <div class="speaking-page__topics--stem">
                                <h1><?php  echo get_post_meta($post->ID, 'speaking-topic-one-number', true); ?></h1>
                                <h4><?php  echo get_post_meta($post->ID, 'speaking-topic-one-title', true); ?></h4>
                                    <p>
                                        <!-- Load the speaking text -->
                                        <?php  echo get_post_meta($post->ID, 'speaking-topic-one-content', true); ?>
                                    </p>
                            </div>
                        <?php endif; ?>
                        <?php if (get_post_meta($post->ID, 'speaking-topic-two-title', true) != '') : ?>
                            <div class="speaking-page__topics--nice-girls">
                                <h1><?php  echo get_post_meta($post->ID, 'speaking-topic-two-number', true); ?></h1>
                                <h4><?php  echo get_post_meta($post->ID, 'speaking-topic-two-title', true); ?></h4>
                                    <p>
                                        <!-- Load the speaking/history text -->
                                        <?php  echo get_post_meta($post->ID, 'speaking-topic-two-content', true); ?>
                                    </p>
                            </div>
                        <?php endif; ?>
                        <?php if (get_post_meta($post->ID, 'speaking-topic-three-title', true) != '') : ?>
                            <div class="speaking-page__topics--mindsets">
                                <h1><?php  echo get_post_meta($post->ID, 'speaking-topic-three-number', true); ?></h1>
                                <h4><?php  echo get_post_meta($post->ID, 'speaking-topic-three-title', true); ?></h4>
                                    <p>
                                        <!-- Load the speaking text -->
                                        <?php  echo get_post_meta($post->ID, 'speaking-topic-three-content', true); ?>
                                    </p>
                            </div>
                        <?php endif; ?>
					</div>

					<div class="speaking-page__testimonials">
						<?php putRevSlider(11) ?>
					</div>

					<div class="speaking-page__previous">
						<h3>Select Clients</h3>
						<div class="speaking-page__previous--column">
							<ul>
								<li>Associated Builders and Contractors</li>
								<li>2016 IRC Summit, Presented by Elite Consulting Pro</li>
								<li>INBOUND 2015</li>
								<li>TEDxStanford</li>
								<li>Kansas State University</li>
								<li>ICAN Women's Leadership Conference</li>
								<li>Apple Store SF</li>
								<li>The Zillow Group</li>
							</ul>
						</div>
						<div class="speaking-page__previous--column">
							<ul>
								<li>Meet the Innovators: Brand Builders</li>
								<li>North Carolina Chamber of Commerce</li>
								<li>Notre Dame High School for Girls</li>
								<li>Marymount School of New York</li>
								<li>Chabot Science Center</li>
								<li>Project Scientist</li>
								<li>Alaska Government, Bureau of Land Management</li>
								<li>University of Alaska</li>
							</ul>
						</div>
					</div>

					<div class="speaking-page__contact">
						<h4 class="speaking-page__contact--title">Ready For Julia To Speak At Your Event?</h4>
							<p class="speaking-page__contact--lead">
								<!-- Load the speaking text -->
								<?php  echo get_post_meta($post->ID, 'speaking-lead', true); ?>
							</p>

						<?php echo do_shortcode ( '[contact-form-7 id="109" title="Speaking Request"]' ); ?>
					</div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /speaking-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
