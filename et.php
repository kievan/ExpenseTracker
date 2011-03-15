<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Expense Tracker</title>
        <script type="text/javascript" src="./js/jquery-1.5.min.js"></script>
        <script type="text/javascript" src="./js/tzSelect/jquery.tzSelect.js"></script>
        <script type="text/javascript" src="./js/etajax.js"></script>
        <script type="text/javascript" src="./js/etui.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/et.css"></link>
        <link rel="stylesheet" type="text/css" href="./js/tzSelect/jquery.tzSelect.css"></link>

    </head>
    <body>
        <h1>Expense Tracker</h1>

        <div id="itemListWrapper">
            <p>Transaction Date Time</p>
            <input type="text" id="transactionDateTime" name="transactionDateTime" value="date time bought"/>
            <div id="itemList">
                <div id="labels">
                    <div id="itemName">Name</div>
                    <div id="itemCategory">Category</div>
                    <div id="itemQuantity">Quantity</div>
                    <div id="itemPrice">Price</div>
                    <div id="itemTotal">Total</div>
                </div>
                <form id="item-0" name="item-0">
                    <input type="text" name="name"/>
                    <select name="itemCategory" id="regularSelect">
                        <option value="food">food</option>
                        <option value="clothes">clothes</option>
                        <option value="household">household</option>
                        <option value="hygiene">hygiene</option>
                        <option value="leisure">leisure</option>
                        <option value="other">other</option>
                    </select>
                    <input type="text" name="itemQuantity"/>
                    <input type="text" name="itemPrice"/>
                    <input type="text" name="itemTotal"/>
                    <div id="deleteItem-0" class="button deleteItem">X</div>
                </form>
            </div>
            <div id="addItem" class="button addItem">Add Item</div>
        </div>
        <div id="addItems" class="button addItems">Add Item Collection</div>
    </body>
</html>