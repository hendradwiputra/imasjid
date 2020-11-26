<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    $path = '/imasjid/assets/images/slide2/';

    function getImagesFromDir($path) {
        $images = array();
        if ( $img_dir = @opendir($path) ) {
            while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
                if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                    $images[] = $img_file;
                }
            }
            closedir($img_dir);
        }
        return $images;
    }

    function getRandomFromArray($ar) {
        mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
        $num = array_rand($ar);
        return $ar[$num];
    }

?>