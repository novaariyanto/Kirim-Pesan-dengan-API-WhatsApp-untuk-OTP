# Kirim-Pesan-dengan-API-WhatsApp-untuk-OTP

Ini adalah aplikasi php untuk mengakses api dari API WhatsApp OTP ( dari ika-broadcast.com )

</br>
</br>
</br>
</br>
contoh penggunaan script :
</br>
`<?php
include("./library/whatsva.php");

$whatsva = new Whatsva();

$instance_key = "IiCVefn6gJG0";
$jid = "62895361034833";
$message = "hello";


$sendMessage = $whatsva->sendMessageText($instance_key,$jid,$message);
?>`
<br/>
<i>Catatan : </br>
Source Code OTP WhatsApp</br>
Aplikasi ini dibuat untuk memudahkan kita dalam mengelola pesan whatsapp.  

Fitur : 
- Kirim Pesan Text melalui API 
- Kirim Pesan Gambar melalui API
- Kirim Pesan File melalui API
- Unlimited Pesan
- kirim pesan tanpa save nomor

NB : 
untuk mendapatkan instance_key perlu mendaftar di ika-broadcast.com

Kita bisa mengirim pesan wa dalam bentuk text dan gambar melalui API dari aplikasi ini. 
aplikasi ini cocok untuk kamu yang ingin membuat otp dengan menggunakan whatsapp. 
aplikasi dibangun dengan bahasa pemrograman nodejs dan database mysql-server.  
apabila anda ingin memiliki aplikasi OTP WhatsApp tanpa biaya bulanan ini 
</i>