<?php

    $ch = curl_init();
    
    $httpheader[] = "Content-Type:application/json";
    $ressource='{"type":"caravane","prix":50}';
    curl_setopt($ch, CURLOPT_URL, "http://localhost/service-api/api/index.php/templacement");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $ressource);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);//indication que la ressource est en json
    $reponse= curl_exec($ch); //récupération  de la réponse
    curl_close($ch);//fermeture du tampon



?>