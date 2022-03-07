<?php

    if(isset($_GET["create_an_offer"])){
           echo "Create an offer request detected...";
           echo "<br/>";
           echo "Launching Take a Lot API request...";
           echo "<br/>";
        
           //Take-a-Lot API request block
           header("Key : 55a977c09b9d8a044edf4dd1ac9b94f93240d7ef1790bc93a1b95a2524f9a52ae96f3d92713e37e7a5023327a0320c934e21275b1782048606d6ba6cec6395f5");
           header("Location: https://seller-api.takealot.com/v2/offers");
        
           echo "Request done...";
           echo "<br/>";
    }

?>
