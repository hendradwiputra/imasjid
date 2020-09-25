<?php
        $image_dir = "../assets/images/";
        $images = [];
        if(!$dir = opendir($image_dir)){
            die("Cannot open $image_dir");
        }        
       
        while(false !== ($image= readdir($dir))){
            if($image != "." && $image != ".." && (strtolower(substr($image, -4)) == "jpeg" || strtolower(substr($image, -3)) == "jpg")){
                array_push($images, $image);
            }
        }        
                
        //echo "<table cellpadding='10' class='table-responsive' align = 'left'><tr>";
        echo "<tr>";
        $count = 0;
        foreach ($images as  $value) {           
            echo "<td valign='bottom'><a href='".$value."'><img src='thumbnails.php?image=".$value."' height='100px' width='140px'></a>\n<a href='".$image_dir.$value."'></a></td>";                    
            $count++;
            if($count >=6){
                echo "</tr><tr>";                
                $count = 0;
            }            
        }
       
        //echo "</tr></table>";
        echo "</tr>";
        closedir($dir);
    ?>
