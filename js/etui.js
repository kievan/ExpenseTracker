var itemIndexAr = [];

$(document).ready
(
    function()
    {
//        $("#regularSelect-0").tzSelect();
//        $("#regularSelect-0").styledSelect();

        $("#transactionDateTime").addClass("transactionDateTime");
        $("#deleteItem-arxetyp").addClass("button deleteItem");
        $("#item-arxetyp").addClass("hideArxetyp");
//        $("#item-arxetyp div").addClass("hideArxetyp");
//        $("#item-arxetyp div input").addClass("hideArxetyp");
//        $("#item-arxetyp div select").addClass("hideArxetyp");
        //$("#itemList form").addClass("item");
        $("#item-arxetyp div").addClass("inputFieldWrapper");



        $("#addItem").bind
        (
            "click",
            function()
            {
                var firstItemIndex = -111;
                var lastItemIndex  = -222;
                var curItemIndex   = -333;
                if( itemIndexAr.length == 0 )
                {
                    firstItemIndex = 0;
                    curItemIndex   = firstItemIndex;
                    itemIndexAr.push( firstItemIndex );
                }
                else
                {
                    lastItemIndex = itemIndexAr[itemIndexAr.length-1];

                    curItemIndex = (lastItemIndex+1);
                    itemIndexAr.push( curItemIndex );
                }

                var itemClone = $("#item-arxetyp").clone();
                itemClone.find("#regularSelect-arxetyp").attr("id","regularSelect-"+(curItemIndex));
//                itemClone.find("#regularSelect-"+(curItemIndex)).styledSelect();
                itemClone.find("#deleteItem-arxetyp").attr("id","deleteItem-"+(curItemIndex));
                itemClone.find("#deleteItem-"+(curItemIndex)).addClass("deleteItem");
                
                var itemHtml = itemClone.html();
                $("#itemList").append
                (
                    "<form id='item-"+(curItemIndex) + "' name='item-"+(curItemIndex)+"'>"
                    +itemHtml
                    +"</form>"
                );

                //$("#regularSelect-"+(curItemIndex)).tzSelect();
                $("div div input").addClass("inputField");
                $("select").addClass("inputField");
                $("#itemList form").addClass("item");
                $("#regularSelect-"+(curItemIndex)).addClass("styledSelect");
                $("#regularSelect-"+(curItemIndex)).styledSelect({innerClass:"innerStyledSelect"});
//                $("#regularSelect-"+(curItemIndex)).parent().addClass();
//                itemClone.find("#regularSelect-"+(curItemIndex)).addClass("innerStyledSelect");
//                $("#regularSelect-"+(curItemIndex)).trigger("resize");


                $("#deleteItem-"+(curItemIndex)).bind
                (
                    "click",
                    function()
                    {
                        var curItemDelIndex = $(this).parent().attr("id").split("-")[1];
                        var curItemArrayIndex = -111;
                        for( var i = 0; i < itemIndexAr.length; i++)
                        {
                            if(itemIndexAr[i]==curItemDelIndex)
                            {
                                curItemArrayIndex = i;
                                break;
                            }
                        }

                        itemIndexAr.splice(curItemArrayIndex,1);
                        $(this).parent().remove();
                    }
                );
            }
        );
    }
);


