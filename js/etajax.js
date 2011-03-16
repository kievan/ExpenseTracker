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
         *         javascript function name,
         *         client side data
         */
        function myXHR( serverSideScript, javaScriptFunction, clientSideData )
        {
            $.ajax
                (
                    {
                        type: "POST",
                        url: serverSideScript,
                        data: clientSideData,
                        success: function( serverSideData )
                        {
                            selectFunction( serverSideData, javaScriptFunction );
                        },
                        error: function()
                        {
                            alert( "Server error.\n"
                                   +serverSideScript+"\n"
                                   +JSFunc+"\n"
                                   +clientSideData );
                        }
                    }
                );
        }
        /*
         * Select a function that will process the server side data.
         */
        function selectFunction( serverSideData, javaScriptFunction )
        {
            switch( javaScriptFunction )
            {
                case "postItemsJSONResponse":
                {
                    postItemsJSONResponse( serverSideData );
                    break;
                }

                default:
                    document.write( "Unrecognized call - selectFunction. "
                                    + javaScriptFunction
                                    + " Server response:" + serverSideData );
                    break;
            }
        }

        function postItemsJSONResponse( serverData )
        {
            alert( serverData );
        }

        $("#addItems").bind
        (
            "click",
            function()
            {
                postItemsJSON();
            }
        );

        function postItemsJSON()
        {
            if( itemIndexAr.length == 0 )
            {
                alert( "Please add at least one item." );
            }
            else
            {
                var jsonStr = "jsonStr=[";
//                var tmpAr = itemIndexAr.splice(itemIndexAr.length-1,1);
//                tmpAr.pop();
                var itemIndexArStr = itemIndexAr.join("|");
                jsonStr += '{"itemIndexArStr":"'+itemIndexArStr+'"},';

                var transactionDateTime =
                    $("#transactionDateTime").serialize().toString().split("=");
                jsonStr += '{"'+ transactionDateTime[0] + '":"'
                               + transactionDateTime[1] + '"},';
                for( var i = 0; i < itemIndexAr.length; i++ )
                {
                    var index = itemIndexAr[i];
                    var itemParts =  $("#item-"+index).serialize().toString().split("&");
                    jsonStr += '{"name":"'    +itemParts[0].split("=")[1]+'",' +
                                '"category":"'+itemParts[1].split("=")[1]+'",' +
                                '"quantity":"'+itemParts[2].split("=")[1]+'",' +
                                '"price":"'   +itemParts[3].split("=")[1]+'",' +
                                '"total":"'   +itemParts[4].split("=")[1]+'"}';
                    jsonStr += ( i == itemIndexAr.length-1 ) ? "" : ",";
                }
                jsonStr += ']';
                myXHR( "./php/storeItems.php", "postItemsJSONResponse", jsonStr );
            }
        }

    }
);

