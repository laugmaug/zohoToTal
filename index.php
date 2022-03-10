<?php
    require_once("auth.php");

    $url = 'https://seller-api.takealot.com/v2/offers';
    $curl = curl_init($url);
    $headers = array(
        "Content-Type: application/json",
        "Content-Length: 0",
        "Authorization: " . $auth,
        'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0',
     );

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    $resp = curl_exec($curl);
    curl_close($curl);
    $jsonObj = json_decode($resp);

    var_dump($jsonObj);

?>
