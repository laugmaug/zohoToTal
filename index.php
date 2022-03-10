<?php
    
    $url = 'https://seller-api.takealot.com/v2/offers/count';

    $curl = curl_init($url);
  
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $headers = array(
       "Content-Type: application/json",
       "Content-Length: 0",
       "Authorization: Key 55a977c09b9d8a044edf4dd1ac9b94f93240d7ef1790bc93a1b95a2524f9a52ae96f3d92713e37e7a5023327a0320c934e21275b1782048606d6ba6cec6395f5",
       'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0',
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    
    $resp = curl_exec($curl);
    curl_close($curl);
    $jsonObj = json_decode($resp);

    var_dump($jsonObj);

?>
