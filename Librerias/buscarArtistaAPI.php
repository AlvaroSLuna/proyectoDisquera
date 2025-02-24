<?php

function artistaAPI($artista){

$url = 'http://ws.audioscrobbler.com/2.0/?method=artist.search&artist=' . urlencode($artista) . '&api_key=81b8eac9a10d5091059f53afd610b848&format=json';

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
return $response;
}
?>
