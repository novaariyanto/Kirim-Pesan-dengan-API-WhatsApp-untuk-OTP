<?php
include("./library/curl_async.php");


$params = [
    "to"=>"62895361034833",
    "pesan"=>"test kirim gambar",
    "imageurl"=>"https://cdn.idntimes.com/content-images/community/2020/06/maxresdefault-44d4d3ef849baff31bd64571388e2ea0_600x400.jpg",
    "image_name"=>"upin.jpg"
];

$url = "http://20.51.217.201:5000/waapi/sendImage";

$d = post_without_wait($url,$params);
print_r($d);