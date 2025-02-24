<?php

function artistaAPI($album)
{

    $url = 'http://ws.audioscrobbler.com/2.0/?method=album.search&album=' . urlencode($album) . '&api_key=81b8eac9a10d5091059f53afd610b848&format=json%20';

    $curl = curl_init();



    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL =>  $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            '81b8eac9a10d5091059f53afd610b848: '
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
