<?php

$s1 = 1400;

if ($s1 < 500){
   $aju = (($s1 / 100) * 15 + $s1);
   echo "O salário é $aju";

} elseif (($s1 >= 500) and ($s1 <= 1000)){
   $aju2 = (($s1 / 100) * 10  + $s1);
   echo "O salário é $aju2";

} else {
   $aju3 = (($s1 / 100) * 5 + $s1);
   echo "O salário é $aju3";

}
  
?>
