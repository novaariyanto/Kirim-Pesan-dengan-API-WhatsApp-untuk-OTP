<?php
include("./library/whatsva.php");

$whatsva = new Whatsva();

$instance_key = "IiCVefn6gJG0";
$jid = "62895361034833";
$caption = "hai";
$documentUrl = "https://budi.kemdikbud.go.id/buku/pdf/1201-SMP-Siluman%20Ular-Sj-Fiks.pdf";


$sendMessage = $whatsva->sendDocumentUrl($instance_key,$jid,$documentUrl);

print_r($sendMessage);