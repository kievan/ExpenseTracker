$(document).ready
(
    function()
    {
		var itemIndex = 0;
        //alert("got here.");
//        $("input").bind
//        (
//          "focus",
//          function()
//          {
//              //alert("gotheretoo.")
//              $(this).attr("value","");
//          }
//        );

        $("#addItem").bind
        (
            "click",
            function()
            {
				itemIndex++;
                //var item = $("#item").clone();
                //item = $.extend(true,{},item);
				//alert( item.attr("form").attr("id") );
                //alert(item.toString());
				// item.find("form").each
				// (
                    // function(index)
                    // {
                       // alert( $(this).attr("id") );
                    // }				
				// );
                // item.find("input").each
                // (
                    // function(index)
                    // {
                       // $(this).attr("value","");
                    // }
                // );
				//alert( $("#item").html() );
                $("#itemList").append
				(
					"<form id='item"+itemIndex+"' name='item"+itemIndex+"'>"+$("#item").html()+"</form>"
				);
				
				$(".deleteItem").bind
				(
					"click",
					function()
					{
						$(this).parent().remove();
					}
				);	
				
				$("p").bind
				(
					"click",
					function()
					{
						var ref = $(this);
						//alert( ref.css("backgroundColor") );
						if( ref.css("backgroundColor") != "rgb(255, 255, 0)" )
							ref.css("backgroundColor", "rgb(255, 255, 0)");
						else
							ref.css("backgroundColor", "rgb(33,29,62)");
					}
				);
				
            }
        );



    }
);


