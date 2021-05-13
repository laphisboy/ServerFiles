<?php
$dirname = "uploads/";
$images = glob($dirname."*jpg");

foreach($images as $image) {
	echo '<img src="'.$image.'" /><br />';
}
?>
