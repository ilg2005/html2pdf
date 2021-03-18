<?php
header('content-type:image/jpeg');
$font = realpath('Roboto-Black.ttf');
$image = imagecreatefromjpeg('certificate.jpg');
$color = imagecolorallocate($image, 51, 51, 102);
$date = date('d F, Y');
imagettftext($image, 18, 0, 60, 50, $color, $font, $date);
$name = 'PLAYER OF CODE';
imagettftext($image, 20, 0, 40, 130, $color, $font, $name);

imagejpeg($image, "./certificates/$name.jpg");

$img = new Imagick("./certificates/$name.jpg");
$img->setImageFormat('pdf');
$success = $img->writeImage("./certificates/$name.pdf");

imagedestroy($image);

