<?php

    require_once("./mySQLWrapper/mySQLConnection.php");

    print("DATA follows-->\n");
    $items = json_decode($_POST["jsonStr"],true);
    print_r($items);

?>
