<?php
//envoie de la requète
//require_once("cle.php");
$ch = curl_init();
//$apikey=$cle;
//$httpheader = ['DOLAPIKEY: '.$apikey];
$httpheader[] = "Content-Type:application/json";
$ressource='{"nom":"kayak","tarif":"20","duree":"demi journée"}';
curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1/service-api/api/index.php/activites");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $ressource);
curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);//indication que la ressource est en json
$reponse= curl_exec($ch); //récupération  de la réponse
curl_close($ch);//fermeture du tampon

?>
