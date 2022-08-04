<?php
include("./library/whatsva.php");

$whatsva = new Whatsva();

$instance_key = "IiCVefn6gJG0";
$jid = "62895361034833";
$message = "hello";


$sendMessage = $whatsva->sendMessageText($instance_key,$jid,$message);

print_r($sendMessage);