<?php
function even_odd(&$x)
{
    $x.=" good morning!";
    /*
    if($x%2==0)
    {
        echo $x."given number is a even<br>";
    }
    else{
        echo $x."given number is a odd<br>";
    }
*/
}
//even_odd(37);
//even_odd(7);
//even_odd(2034);
$y="hello everyone";
even_odd($y);
echo $y;
?>