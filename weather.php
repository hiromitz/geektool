<?php
// NOTE: put this script on webserver

$url = 'http://weather.yahoo.com/japan/tokyo-prefecture/tokyo-1118370/';

$html = file_get_contents($url);

$math = array();
preg_match('/<div class="forecast-icon" style="background:url\(\'(.+?)\'\);/', $html, $match);

$image=imagecreatefrompng($match[1]);

imagealphablending($image, true);
imagesavealpha($image, true);

header('Content-Type: image/png');
imagepng($image);

