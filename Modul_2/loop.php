<?php 

$murid = array(
    array("Ahmad", "XIR3", "L"),
    array("Zubair", "XIR4", "L"),
    array("Ani", "XIIR5", "P"),
    array("Lina", "XR3", "P")
);

for($i = 0; $i < 4; $i++){
    echo '<hr>';
    for($j = 0; $j < 3; $j++){
    echo '<p>'.$murid[$i][$j].'</p>';
}
}

?>