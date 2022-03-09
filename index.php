<?php
    function send_request_to_tal_api($module, $dataObj){
        //Add authentication headers & url to be requested
        require_once("auth.php");
        $url = "https://seller-api.takealot.com/" . $module;

        //Calling Curl Library client for URLs
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
           "Authentication: " . $Auth
        );
        
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = $dataObj;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $resp = curl_exec($curl);
        curl_close($curl);

        return $resp;   
    }


    if(isset($_GET["create_an_offer"])){
        echo "Create an offer request detected...";
        /*echo "<br/>";
        echo "Launching Take a Lot API request...";
        echo "<br/>";
        */
        //Take-a-Lot API request block
        $jsonObj = json_encode($_GET["item_id"]);
        
        var_dump( send_request_to_tal_api("v2/offers/count", $jsonObj));
        /*
        //https://seller-api.takealot.com/api-docs/#/Create%20an%20offer/create_offer_by_identifier_v2
        $response = file_get_contents("https://seller-api.takealot.com/v2/offers");
        echo "Request successfully sent...";
        echo "<br/>";
        
        
        echo "<br/>";
        
        //take-a-lot API response handler
        var_dump($response);
        */
    }

?>
