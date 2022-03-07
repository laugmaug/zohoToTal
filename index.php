<?php

    if(isset($_GET["create_an_offer"])){
           echo "Create an offer request detected...";
           echo "";
           echo "Launching Take a Lot API request...";
           echo "";
        
           //Take-a-Lot API request block
           header("Authorization: Key 37e7a5023327a0320c934e21275b1782048606d6ba6cec6395f5");
           header("Location: https://seller-api.takealot.com/v2/offers");
        
           echo "Request done...";
           echo "";
    }

?>
