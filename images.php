<?php
        $image_dir = "./assets/images/";
        $images = [];
        if(!$dir = opendir($image_dir)){
            die("Cannot open $image_dir");
        }        
       
        while(false !== ($image= readdir($dir))){
            if($image != "." && $image != ".." && (strtolower(substr($image, -4)) == "jpeg" || strtolower(substr($image, -3)) == "jpg")){
                array_push($images, $image);
            }
        }        
        
        echo "<table id='gallery' width='60%' cellpadding=5 align = 'left'><tr>";
        $count = 0;
        foreach ($images as  $value) {           
            echo "<td valign='bottom' colspan='2' class='text-center'><a href='#'><img src='thumbnails.php?image=".$value."' height='130px' width='195px'></a>\n<a href='".$image_dir.$value."'><small>[Edit]</small></a></td>";
                    
            $count++;
            if($count >=4){
                echo "</tr><tr>";                
                $count = 0;
            }            
        }
       
        echo "</tr></table>";
        closedir($dir);
    ?>