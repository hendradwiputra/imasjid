<?php
 $image_dir = "../assets/images/";
/* */
$img = $_GET['image'];
$size = 200;
if($img){
    $image = imagecreatefromjpeg($image_dir."/".$img);
    $width  = imagesx($image);
    $height = imagesy($image);
    
    $thumb_height = $size;
    $thumb_width  = $size;
    
    $ratio_original = $width / $height;
    if($thumb_width / $thumb_height > $ratio_original){
        $thumb_width = $size * $width;
    }else{
        $thumb_height = $size / $ratio_original;
    }
    
    $thumbnail = imagecreatetruecolor($thumb_width, $thumb_height);
    imagecopyresized($thumbnail, $image, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
    header("Content-type: image/jpeg");
    imagejpeg($thumbnail);
    imagedestroy($thumbnail);
    imagedestroy($image);
    
}

