<?php
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<?php //var_dump($images); ?>

<div class="gallery-slide-page" style="background-color: black;">
	<?php
	$i = 1;
	foreach($images as $img){
		echo '<div>';
		echo '<a href="'.$img->imageURL.'" data-src="'.$img->imageURL.'" data-thumbnail="'.$img->thumbnailURL.'" data-image-id="'.$i.'" data-title="'.$img->filename.'" data-description="" '.$img->thumbcode.'>';
		echo '<img src="'.$img->thumbnailURL.'" class="img-responsive">';
		echo '</a></div>';
		$i++;
	}
	?>
</div>


<?php endif; ?>
