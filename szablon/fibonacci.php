<?php
include "0begin.php"
?>
<h1> Ciąg Fibonacciego </h1>
<?php

$a=0;
$b=1;
$c=1;

for ($x = 0; $x <26; $x++) {
    echo"$x: $a<br>";
    $a=$b;
    $b=$c;
    $c=$a+$b;
    
}
include "0end.php"
?>
