<?php
 $bakgrunnur = [
 ['file' => 'bakgrunnur1',
 'caption' => 'Fallegur hvítur múrsteinabakgrunnur'],
 ['file' => 'bakgrunnur2',
 'caption' => 'Æðislegur ljósblár bakgrunnur í avant-gade stýl'],
 ['file' => 'bakgrunnur3',
 'caption' => 'Einfalldur en hliðstæður grár bakgrunnur']
 ];

  $i = rand(0, count($bakgrunnur)-1);
$valinnBakgrunnur = "images/{$bakgrunnur[$i]['file']}.jpg";
 	$textinn = $bakgrunnur[$i]['caption'];