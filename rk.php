<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Receipts Keeper</title>
        <script type="text/javascript" src="./bin/js/jquery-1.5.min.js"></script>
        <script type="text/javascript" src="./bin/js/receipt.js"></script>
        <script type="text/javascript" src="./bin/js/receiptui.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/receipt.css"></link>
    </head>
    <body>
            <!--<form id="receipt" class="receipt" name="receipt">-->
                <div id="itemListWrapper">
                    <p>itemList</p>
                    <div id="itemList">
                        <form id="item0" name="item0">
                            <p>item</p><div id="deleteItem">X</div>
                            <input type="text" name="itemName" value="item name"/>
                            <select name="itemCategory">
                                <option value="food">food</option>
                                <option value="clothes">clothes</option>
                                <option value="household">household</option>
                                <option value="hygiene">hygiene</option>
                                <option value="leisure">leisure</option>
                                <option value="other">other</option>
                            </select>
                            <input type="text" name="itemQuantity" value="quantity"/>
                            <input type="text" name="itemPrice" value="price"/>
                            <input type="text" name="itemTotal" value="total"/>
                        </form>
                    </div>
                    <input type="button" id="addItem" value="Add Item"/>
                </div>
                <input type="button" id="addReceipt" value="Add Receipt"/>
            <!--</form>-->
			
				<form id="item" name="item">
					<p>item</p><div class="deleteItem">X</div>
					<input type="text" name="itemName" value="item name"/>
					<select name="itemCategory">
						<option value="food">food</option>
						<option value="clothes">clothes</option>
						<option value="household">household</option>
						<option value="hygiene">hygiene</option>
						<option value="leisure">leisure</option>
						<option value="other">other</option>
					</select>
					<input type="text" name="itemQuantity" value="quantity"/>
					<input type="text" name="itemPrice" value="price"/>
					<input type="text" name="itemTotal" value="total"/>
				</form>			
    </body>
</html>