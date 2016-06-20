<?php

 $album=array (
    array("1", "Harry","Dreams",2015, 15, "Klasiek"),
     array("2","Barry","Epic",2012, 20, "House"),
         array("3","Brennan Heart","Revolution",2013, 5, "Hardstyle"),
             array("4","Piet","EZ",1999, 15, "Dance"),
                array("5","Henry","Ketel",2000, 50, "Country"),
                    array("6","Jan","Kost",2025, 20, "Klasiek") ,
                        array("7","Fnatic","Boostmeister",2000, 50, "Trance")

     );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
   <?php
   echo $album[0][0]." - ".$album[0][1].". - ".$album[0][2]." - " .$album[0][3]." - ".$album[0][4]." - ".$album[0][5]."<br>";
   echo $album[1][0]." - ".$album[1][1].". - ".$album[1][2]." - " .$album[1][3]." - ".$album[1][4]." - ".$album[1][5]."<br>";
   echo $album[2][0]." - ".$album[2][1].". - ".$album[2][2]." - " .$album[2][3]." - ".$album[2][4]." - ".$album[2][5]."<br>";
   echo $album[3][0]." - ".$album[3][1].". - ".$album[3][2]." - " .$album[3][3]." - ".$album[3][4]." - ".$album[3][5]."<br>";
   echo $album[4][0]." - ".$album[4][1].". - ".$album[4][2]." - " .$album[4][3]." - ".$album[4][4]." - ".$album[4][5]."<br>";
   echo $album[5][0]." - ".$album[5][1].". - ".$album[5][2]." - " .$album[5][3]." - ".$album[5][4]." - ".$album[5][5]."<br>";
   echo $album[6][0]." - ".$album[6][1].". - ".$album[6][2]." - " .$album[6][3]." - ".$album[6][4]." - ".$album[6][5]."<br>";
   ?>
</body>
</html>
