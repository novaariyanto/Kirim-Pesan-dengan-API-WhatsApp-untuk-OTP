<?php
include("./library/curl_async.php");


$params = [
    "to"=>"62895361034833",
    "pesan"=>"kode otp anda '3212'. jangan beritahukan ke siapapun untuk menjaga keamanan akun anda"
];
$url = "http://20.51.217.201:5000/waapi/sendText";

$d = post_without_wait($url,$params);
print_r($d);