<?php
    function call_api($module){
        //Get API key
        require_once("auth.php");

        //Set up headers & url
        $url = 'https://seller-api.takealot.com/' . $module;
        $curl = curl_init($url);
        $headers = array(
            "Content-Type: application/json",
            "Content-Length: 0",
            "Authorization: " . $auth,
            'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0',
        );

        //Set cURL options
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
        //Execute cURL to GET url
        $resp = curl_exec($curl);
        curl_close($curl);
        $jsonObj = json_decode($resp);

        //Print out response
        return $resp;
    }


    if(isset($_GET["import_offers"])){
        //Import offers/items
        print_r(call_api("v2/offers"));
    }
    else if(isset($_GET["import_sales"])){
        //import sales with their respective customers
        print_r(call_api("v2/sales"));
    }

?>
