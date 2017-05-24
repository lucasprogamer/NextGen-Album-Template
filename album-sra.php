<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($galleries)) : ?>

	<script src="<?php bloginfo('stylesheet_directory'); ?>/nggallery/assets/js/main.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/nggallery/assets/css/default.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/nggallery/assets/css/component.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/nggallery/assets/fonts/css/font-awesome.min.css">

	<script src="<?php bloginfo('stylesheet_directory'); ?>/nggallery/assets/js/modernizr.custom.js"></script>


<div class="ngg-albumoverview">

	<!-- List of galleries -->

<ul class="grid cs-style-3">
	<?php foreach ($galleries as $gallery) : ?>
									<li>
										<figure>
											<a href="<?php echo nextgen_esc_url($gallery->pagelink) ?>">
											<img class="img-responsive" src="<?php echo esc_attr($gallery->previewpic_fullsized_url); ?>" alt="<?php echo esc_attr($gallery->title); ?>">
											</a>
											<figcaption>
												<h3><?php echo esc_attr($gallery->title); ?></h3>
												<span>
													<i class="fa fa-camera"></i>
														<?php if (isset($gallery->counter) && $gallery->counter > 0) { ?>
															<strong><?php echo $gallery->counter; ?></strong>&nbsp;<?php _e('Fotos', 'nggallery'); ?>
														<?php } else { ?>
															&nbsp;
														<?php } ?>
												</span>
												<a href="<?php echo nextgen_esc_url($gallery->pagelink) ?>">Veja Mais</a>
											</figcaption>
										</figure>
									</li>

 	<?php endforeach; ?>
</ul>




<!-- </div> -->
</div>


	<!-- Pagination -->
    <br class="ngg-clear"/>
 	<?php echo $pagination ?>
</div>

<?php endif; ?>
