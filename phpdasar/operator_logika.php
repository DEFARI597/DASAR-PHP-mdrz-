<?php
$a = true;
$b = false;

//variable $c akan bernilia false
$c = $a && $b;
printf("%b &7 %b", $a,$b,$c);
echo"<hr/>";

// variable $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b ", $a,$b,$c);
echo"<hr>";

//variable $c akan bernilai false 
$c = !$a;
printf("!%b = %b", $a, $c);
echo"<hr>";


?>