<?php
        class MySQLBasic
        {
            private $conn;      // connection id
            private $result;    // query result

            function __construct()
            {
                $this->conn     = "Default connection id.";
                $this->result   = "Default database result.";
            }

            function executeQuery( $server, $username, $password, $db, $queryStr )
            {
                $this->conn = mysql_connect( $server, $username, $password ) or
                              die( "Unable to connect to the server." );
                mysql_select_db( $db, $this->conn ) or
                              die( "Connected to server but unable to select"
                                   ."the database." );
                $this->result = mysql_query( $queryStr, $this->conn ) or
                              die( "Unable to execute the query." );
                mysql_close( $this->conn );

                return $this->result;
            }
        }
?>
