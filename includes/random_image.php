<?php
 $images = [
 ['file' => 'mynd_(1)',
 'caption' => 'Í sandinum'],
 ['file' => 'mynd_(2)',
 'caption' => 'Í herbergi'],
 ['file' => 'mynd_(3)',
 'caption' => 'Hjá grænu portali'],
 ['file' => 'mynd_(4)',
 'caption' => 'Eld fönix'],
 ['file' => 'mynd_(5)',
 'caption' => 'Svenfherbergi með hundi']
 ];
 $i = rand(0, count($images)-1);
$selectedImage = "images/{$images[$i]['file']}.jpg";
 	$caption = $images[$i]['caption'];
 	if (file_exists($selectedImage) && is_readable($selectedImage)) {
 $imageSize = getimagesize($selectedImage);
 }