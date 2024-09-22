<?php
$x="abc";
$$x=1000;
echo "X=".$x;
echo "<br> reference of x is=".$$x;
echo "<br> x=".$abc;

$name="vanshika";
$$name="salekar";
echo "<br> my name is $name".$$name;
?>