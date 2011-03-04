$(document).ready
(
    function()
    {

        /*
         * A function that calls a server side script,
         * passes in the variables from html form,
         * and calls a function that will process server response.
         *
         * PARAMS: server side script name,
         *         javascript function,
         *         client side data
         */
        function myXHR( sss_name, js_func, cs_data )
        {
            $.ajax
                (
                    {
                        type: "POST",
                        url: sss_name,
                        data: cs_data,
                        success: function( server_data )
                        {
                            select_func( server_data, js_func );
                        },
                        error: function()
                        {
                            alert( "Server error.\n"+sss_name+"\n"+js_func+"\n"+cs_data );
                        }
                    }
                );
        }
        /*
         * Select a function that will process the server side data.
         */
        function select_func( serverData, jsFunc )
        {
            switch( jsFunc )
            {

                case "addReceiptResponse":
                {
                    getConfRoomAvailabilityResponse( serverData );
                    break;
                }
                case "dummyResponse":
                {
                    dummyResponse( serverData );
                    break;
                }

                default:
                    document.write( "Unrecognized call - func_select. " + func_name + " Server response:" + data );
                    break;
            }
        }

        function dummyResponse( serverData )
        {
            alert( serverData );
        }

        $("#addReceipt").bind
        (
            "click",
            function()
            {
                //var receipt = $("#receipt").serialize();
				var receipt = $("#item0").serialize();
				receipt += "&"+$("#item1").serialize();
				alert(receipt);
                myXHR( "./bin/php/dummy.php", "dummyResponse", receipt );
            }
        )
    }
);

