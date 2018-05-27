<?php
/**
 * luxcorerender.org front page
 *
 * @package Total
 */

get_header();

get_template_part( 'template-parts/section', 'slider' );

?>

<section id="ht-featured-post-section" class="ht-section">
	<div class="ht-container">
		<section id="section-major-features">
			<div class="ht-section-title-tagline">
				<h2 class="ht-section-title">Major Features</h2>
				<div class="ht-section-tagline">LuxCoreRender is a physically based and unbiased rendering engine. Based on state of the art algorithms, LuxCoreRender simulates the flow of light according to physical equations, thus producing realistic images of photographic quality.</div>
			</div>
			<div class="ht-featured-post-wrap ht-clearfix">
				<a class="ht-featured-post" href="/physically-based-rendering/">
					<img class="ht-featured-excerpt-image" alt="Refraction of light through a prism" src="<?php bloginfo('template_url'); ?>/images/icons/01-prism.svg">
					<h5>Physically based rendering</h5>
					<div class="ht-featured-excerpt">
						LuxCoreRender is built on physically based equations that model the transportation of light. <span class="ht-featured-pseudolink">Read&nbsp;More</span>
					</div>
				</a>
				<a class="ht-featured-post" href="/heterogeneous-computing/">
					<img class="ht-featured-excerpt-image" alt="GPU and CPU icons" src="<?php bloginfo('template_url'); ?>/images/icons/02-gpu-cpu.svg">
					<h5>Heterogeneous computing</h5>
					<div class="ht-featured-excerpt">
						LuxCoreRender uses OpenCL to run on any number of CPUs and/or GPUs available. <span class="ht-featured-pseudolink">Read&nbsp;More</span>
					</div>
				</a>
				<a class="ht-featured-post" href="/free/">
					<img class="ht-featured-excerpt-image" alt="Apache feather logo" src="<?php bloginfo('template_url'); ?>/images/icons/03-apache-feather.svg">
					<h5>Free</h5>
					<div class="ht-featured-excerpt">
						LuxCoreRender is and will always be free software, both for private and commercial use.  <span class="ht-featured-pseudolink">Read&nbsp;More</span>
					</div>
				</a>
			</div>
		</section>
		<section id="section-learn-more">
			<div class="ht-section-title-tagline">
				<h2 class="ht-section-title">Learn More</h2>
				<div class="ht-section-tagline">Learn about developer resources, LuxCoreRender advanced features or take a look at the gallery.</div>
			</div>
			<div class="ht-featured-post-wrap ht-clearfix">
				<a class="ht-featured-post" href="/luxcore-api/">
					<img class="ht-featured-excerpt-image" alt="Gears icon" src="<?php bloginfo('template_url'); ?>/images/icons/04-gears.svg">
					<h5>LuxCore API</h5>
					<div class="ht-featured-excerpt">
						The C++/Python code that can be used for building both free and commercial products. <span class="ht-featured-pseudolink">Read&nbsp;More</span>
					</div>
				</a>
				<a class="ht-featured-post" href="/advanced-features/">
					<img class="ht-featured-excerpt-image" alt="Ray tracing scheme" src="<?php bloginfo('template_url'); ?>/images/icons/05-tracing.svg">
					<h5>Advanced features</h5>
					<div class="ht-featured-excerpt">
						LuxCoreRender supports various tracing methods, object instancing, volumes, etc. <span class="ht-featured-pseudolink">Read&nbsp;More</span>
					</div>
				</a>
				<a class="ht-featured-post" href="/gallery/">
					<img class="ht-featured-excerpt-image" alt="Tiled gallery icon" src="<?php bloginfo('template_url'); ?>/images/icons/06-gallery.svg">
					<h5>Gallery</h5>
					<div class="ht-featured-excerpt">
						A showcase of what LuxCoreRender users have been able to achieve. <span class="ht-featured-pseudolink">View&nbsp;the&nbsp;gallery</span>
					</div>
				</a>
			</div>
		</section>
		<section id="section-download">
			<div class="ht-section-tagline">Download the binaries for various operating systems or get the source code of LuxCoreRender.</div>
			<a id="download-button-in-text" class="link-button" href="/download/"><h3>Download</h3></a>
		</section>
	</div>
</section>

<?php get_footer(); ?>
