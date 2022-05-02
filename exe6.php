<?php

$s1 = 1400;

if ($s1 < 500){
   $aju = ($s1 / 100) * 15;
   echo "O ajuste é de $aju%";

} elseif (($s1 >= 500) and ($s1 <= 1000)){
   $aju2 = ($s1 / 100) * 10;
   echo "O ajuste é de $aju2%";

} elseif ($s1 > 1000){
   $aju3 = ($s1 / 100) * 5;
   echo "O ajuste é de $aju3%";

}
  
    




?>