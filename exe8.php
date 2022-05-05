<?php
$alt = 1.60;
$peso = 84;

$total =  $peso / ($alt * $alt);

if($total < 18.5){
    echo "Abaixo do peso";

} elseif (($total >= 18.5) and ($total < 25)){
    echo "Peso normal";

} elseif (($total >= 25) and ($total < 30)){
    echo "Sobrepeso";

} else {
    echo "Obesidade";
}

?>
