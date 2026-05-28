<?php
$num=10;
$a=0;
$b=1;

echo"<h2>Fibonacci Series:</h2>";
for($i=1;$i<$num; $i++){
    echo $a."";
    $next = $a+$b;
    $a=$b;
    $b=$next;

}
?>