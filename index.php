<?php

    if(isset($_GET["create_an_offer"])){
        echo "Create an offer request detected...";
        echo "<br/>";
        echo "Launching Take a Lot API request...";
        echo "<br/>";

        $response = file_get_contents("https://seller-api.takealot.com/v2/offers/count");
        echo $response;
        
        //Take-a-Lot API request block
        require_once("auth.php");
        /*
        //https://seller-api.takealot.com/api-docs/#/Create%20an%20offer/create_offer_by_identifier_v2
        $response = file_get_contents("https://seller-api.takealot.com/v2/offers");
        echo "Request successfully sent...";
        echo "<br/>";
        
        $jsonObj = json_encode($_GET["item_id"]);
        var_dump($jsonObj);
        echo "<br/>";
        
        //take-a-lot API response handler
        var_dump($response);
        */
    }

?>
