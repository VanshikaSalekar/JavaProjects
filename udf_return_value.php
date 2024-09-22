<?php
function check_number($a,$b)
{
    if($a>$b)
    {
        return 1;
    }
    else{
        return 0;
    }
}
$x=check_number(3,2);
if($x==1)
{
    echo "given number is greater";
}
else{
    echo "given number is smaller";
}
?>