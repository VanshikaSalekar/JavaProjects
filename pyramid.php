<?php
$rows = 5; 

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }

    echo "<br>";
}
?>