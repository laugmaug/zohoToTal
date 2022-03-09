<?php
    function send_request_to_tal_api($module, $dataObj = null){
        //Add authentication headers & url to be requested
        require_once("auth.php");
        $url = "https://seller-api.takealot.com/" . $module;

        //Set auth headers
        $headers = array(
           "Authentication: " . $Auth
        );
        
        //Calling Curl Library client for URLs
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $resp = curl_exec($curl);
        
        if($e = curl_error($curl)){
            $ret = "Error on POST request";
        }else{
           $ret = json_decode($resp, true);
        }
        
        curl_close($curl);
        
        return $ret;   
    }


    if(isset($_GET["create_an_offer"])){
        //echo "Create an offer request detected...";
        /*echo "<br/>";
        echo "Launching Take a Lot API request...";
        echo "<br/>";
        */
        //Take-a-Lot API request block
        $jsonObj = json_encode($_GET["item_id"]);
        
        var_dump(send_request_to_tal_api("v2/offers/count"));
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
