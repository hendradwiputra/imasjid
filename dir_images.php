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
        
        echo "<table id='gallery' width='100%' align = 'left'><tr>";
        $count = 0;
        foreach ($images as  $value) {           
            echo "<td valign='bottom' colspan='2'><a href='#'><img src='thumbnails.php?image=".$value."' height='60px' width='100px'></a>\n<a href='".$image_dir.$value."'></a></td>";
                    
            $count++;
            if($count >=4){
                echo "</tr><tr>";                
                $count = 0;
            }            
        }
       
        echo "</tr></table>";
        closedir($dir);
    ?>