<?php
setcookie("username","",time()-3600);
echo"cookie'username'has been deleted.";
echo"<br>";
?>

<?php
if(isset($_COOKIE['username'])){
    echo"username:".$_COOKIE['username'];
}else{
    echo"cookie'username'is not set.";
}echo"<br>";
?>

<?php
if(isset($_COOKIE['visit_count'])){
    $visit_count=$_COOKIE['visit_count']+1;
}
else{
    $visit_count=1;
}
setcookie("visit_count",$visit_count,time()+86400);
echo"you have visited the page".$visit_count."times.";
?>