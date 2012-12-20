<?php
$string = "12345678";
$explode = explode("5",$string);

for($i = 0; $i <= strlen($string); $i++){

   if(isset($explode[$i])){

     echo "The variable \$explode[$i] exists! <br>";

     echo $explode[$i] . "<br><br>";   

   }

   else{

       echo "The variable \$explode[$i] doesn't exist!<br><br>";
 
   }

}
?>