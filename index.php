<?php

    if(isset($_GET["create_an_offer"])){
        echo "Create an offer request detected...";
        echo "";
        echo "Launching Take a Lot API request...";
        echo "";

        //Take-a-Lot API request block
        require_once("auth.php");
        
        $response = file_get_contents("https://seller-api.takealot.com/v2/offers");

        echo "Request successfully sent...";

        //take-a-lot API response handler
        var_dump($response);

    }

?>
