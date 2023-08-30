<?php
include("./library/whatsva.php");

$whatsva = new Whatsva();

$instance_key = "V103EvgIU66v";
$jid = "62895361034833";

$message = "Halo"; 
        

$sendMessage = $whatsva->sendMessageText($instance_key,$jid,$message);

print_r($sendMessage);