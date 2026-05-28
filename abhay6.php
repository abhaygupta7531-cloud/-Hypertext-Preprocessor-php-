<?php
$num=153;
$original=$num;
$sum=0;

while($num>10){
    $remender=$num%10;
    $sum=$sum+($remender*$remender*$remender);
}if($original==$sum){
    echo"original is an armstrong number.";
}else{
    echo"original is not an armstrong number.";
}
?>