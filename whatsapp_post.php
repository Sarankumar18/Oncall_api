<?php

$url = "https://graph.facebook.com/v13.0/101458719349616/messages";
$to = $_GET['ph_no'];
//echo $to;
if(($to != NULL )&& (strlen($to) == 12) )
{
    $curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//setting up config
$headers = array(
   "Authorization: Bearer EABKJXkleDIoBAPjoYR18eBTCRRlr6ZB8d7rucGGGS12C9oObbJQZCgroDT0R85thdqdjt8ilMhum0oZB5xtlS5PE7nssUCV2itxRobyyDfOXK9qBXTpNIZBzHieZCXy9HUFS2iZAYWgsBiAS9CONaF0JwEzfXvntiOQgyJ13zuZAED8sJjRMc8g",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$string = '{ "messaging_product": "whatsapp", "to": "", "type": "template", "template": { "name": "callforwarderack", "language": { "code": "en_US" } } }';
$data = substr_replace($string, $to, 42, 0);
//echo $data;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug !
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
}
else{
    echo"Please provide phone No with country Code...";
}

?>

