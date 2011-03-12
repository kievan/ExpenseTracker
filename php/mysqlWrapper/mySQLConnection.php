<?php
    /*
     * MySQL connection settings.
     */
    $mySQLConnection = array
     (
        "server"    => "localhost",        // server
        "username"  => "eTrackerAdmin",    // username
        "password"  => "hard24get",        // password
        "database"  => "expenseTracker",   // database
    );

    // Put local array into global array
    $GLOBALS[ "mySQLConnection" ] = $mySQLConnection;
?>
