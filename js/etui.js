var itemIndexAr = [0];

$(document).ready
(
    function()
    {
        //$("select#regularSelect").tzSelect();
        //$("select#regularSelect0").tzSelect();

        $("#addItem").bind
        (
            "click",
            function()
            {
                var curItemIndex = itemIndexAr[itemIndexAr.length-1];
                
                curItemIndex++;
                itemIndexAr.push(curItemIndex);

                var itemClone = $("#item-"+(curItemIndex-1)).clone();
                itemClone.find("#deleteItem-"+(curItemIndex-1)).attr("id","deleteItem-"+(curItemIndex));

                var itemHtml = itemClone.html();
                $("#itemList").append
                (
                    "<form id='item-"+(curItemIndex) + "' name='item-"+(curItemIndex)+"'>"
                    +itemHtml
                    +"</form>"
                );

                $("#deleteItem-"+(curItemIndex)).bind
                (
                        "click",
                        function()
                        {
                            if( $(this).parent().attr("id") != "item-0" )
                            {
                                //var curItemDelIndex = $(this).parent().attr("id").split("-")[1];
                                var curItemDelIndex = curItemIndex;
                                //curItemDelIndex = parseInt(curItemDelIndex);
                                for( var i = 0; i < itemIndexAr.length; i++)
                                {
                                    if(itemIndexAr[i]==curItemDelIndex)
                                    {
                                        curItemDelIndex = i;
                                        break;
                                    }
                                }
                                
                                if( itemIndexAr.length > 1)
                                    itemIndexAr.splice(curItemDelIndex,1);
                                $(this).parent().remove();
                            }
                        }
                );
            }
        );
    }
);


