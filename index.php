<?php

    if(isset($_GET["create_an_offer"])){
        echo "Create an offer request detected...";
        echo "<br/>";
        echo "Launching Take a Lot API request...";
        echo "<br/>";

        //Take-a-Lot API request block
        require_once("auth.php");
        $response = file_get_contents("https://seller-api.takealot.com/v2/offers");
        echo "Request successfully sent...";
        echo "<br/>";

        //take-a-lot API response handler
        var_dump($response);

    }

?>
