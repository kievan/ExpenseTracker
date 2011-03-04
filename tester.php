<?php

    require_once(dirname(__FILE__)."/Receipt/Receipt.php");

    $var =
    array
    (
        "receipt" =>
            array
            (
                "receiptId" => "receipt1",
                "store" =>
                    array
                    (
                        "storeId" => "store1",
                        "name" => 
                            array
                            (
                                "storeNameId" => "storeName1",
                                "general" => "Monoprix",
                                "specific" => "Tolbiac"
                            ),
                        "telephone" => "07560789",
                        "address" => "76 rue de tolbiac 75013 paris"
                    ),
                "itemList" =>
                    array
                    (
                        "itemListId" => "itemList1",
                        "list" => 
                            array
                            (
                                array
                                (
                                    "itemId" => "item1",
                                    "category" =>
                                        array
                                        (
                                            "categoryId" => "category1",
                                            "name" => "food"
                                        ),
                                    "name" => "milk",
                                    "quantity" => "2",
                                    "price" => "0.63",
                                    "total" => "1.26"
                                ),
                                array
                                (
                                    "itemId" => "item2",
                                    "category" =>
                                        array
                                        (
                                            "categoryId" => "category1",
                                            "name" => "food"
                                        ),
                                    "name" => "bread",
                                    "quantity" => "1",
                                    "price" => "0.80",
                                    "total" => "0.80"
                                )
                           )
                    ),
                "paymentMethod" =>
                    array
                    (
                        "paymentMethodId" => "paymentMethod1",
                        "name" => "carte bancaire",
                        "debitCardNumber" => "**********7865",
                        "creditCardNumber" => "",
                        "paypalEmail" => ""
                    ),
                "tax" =>
                    array
                    (
                        "taxId" => "tax1",
                        "percent" => "5.5",
                        "total" => "0.11"
                    ),
                "transactionDateTime" => "2011-01-03T11:34:54.000+01:00",
                "number" => "12345",
                "numberOfItems" => "2",
                "currency" => "EUR",
                "total" => "2.06"
            )
    );
    $json = json_encode($var);
    $receipt = new Receipt($var["receipt"]);

    print("got so far\n");
    print($receipt->getItemList()->getItemListId()."\n");
    $itemList = $receipt->getItemList()->getList();
    $itemId = $itemList[0]->getItemId();
    ////print_r($itemList);
    print($itemId."\n\n\n");
    print(json_encode($var));
    $specs =
    '{
      "Front End Web Engineering":
        [
          {
            "Browser": {"Visuals": "HTML/CSS", "Logic":"jQuery/Dojo"},
            "Bridge":  {"Tech": "AJAX", "Format":"JSON"},
            "Backend": {"Logic":"PERL/PHP", "Storage":"MySQL/MSSQL"}
          }
        ]
     }';
    $spec = '{"Front End Web Engineering": {"Browser": {"Visuals":"HTML/CSS", "Logic":"jQuery/Dojo"} }';
    print("\n\n");
    print_r(json_decode($specs,true));
//    $var=array("item"=>array("name"=>"soap", "price"=>"0.50"), "another str");
//
//    print $json = json_encode( $var );
//    print_r ($json_dec = json_decode($json, true));
//    print $json_dec["item"]["price"];

    

//class MyClass
//{
//   protected static $myclassvar = "STATIC MyClass VAR";
//   protected function myFunc() {
//       echo "MyClass::myFunc()\n";
//   }
//   public function __construct()
//   {
//
//   }
//   public function __destruct()
//   {
//       echo "MyClass instance destroyed.";
//   }
//}
//
//class OtherClass extends MyClass
//{
//   // Override parent's definition
//   public function myFunc()
//   {
//       // But still call the parent function
//       parent::myFunc();
//       echo parent::$myclassvar."\n";
//       echo "OtherClass::myFunc()\n";
//   }
//}
//$class = new OtherClass();
//$class->myFunc();
?>
