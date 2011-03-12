<?php

    require_once( dirname(__FILE__)."/Store.php" );
    require_once( dirname(__FILE__)."/ItemList.php" );
    require_once( dirname(__FILE__)."/PaymentMethod.php" );
    require_once( dirname(__FILE__)."/Tax.php" );

    class Receipt
    {
        private $receiptId;
        private $store;
        private $itemList;
        private $paymentMethod;
        private $tax;
        private $transactionDateTime;
        private $total;
        private $numberOfItems;
        private $number;


        public function __construct($receipt)
        {
            $this->setReceiptId($receipt["receiptId"]);
            $this->setStore($receipt["store"]);
            $this->setItemList($receipt["itemList"]);
            $this->setPaymentMethod($receipt["paymentMethod"]);
            $this->setTax($receipt["tax"]);
            $this->setTransactionDateTime($receipt["transactionDateTime"]);
            $this->setNumberOfItems($receipt["numberOfItems"]);
            $this->setNumber($receipt["number"]);
            $this->setTotal($receipt["total"]);
        }

        public function  __destruct()
        {
        }

        /*
         * Set Receipt fields
         */
        public function setReceiptId($x) { $this->receiptId = $x; }
        public function setStore($x) { $this->store = new Store($x); }
        public function setItemList($x) { $this->itemList = new ItemList($x); }
        public function setPaymentMethod($x) { $this->paymentMethod = new PaymentMethod($x); }
        public function setTax($x) { $this->tax = new Tax($x); }
        public function setTransactionDateTime($x) { $this->transactionDateTime = $x; }
        public function setTotal($x) { $this->total = $x; }
        public function setNumberOfItems($x) { $this->numberOfItems = $x; }
        public function setNumber($x) { $this->number = $x; }

        /*
         * Get Receipt fields
         */
        public function getReceiptId() { return $this->receiptId; }
        public function getStore() { return $this->store; }
        public function getItemList() { return $this->itemList; }
        public function getPaymentMethod() { return $this->paymentMethod; }
        public function getTax() { return $this->tax; }
        public function getPurchaseDateTime() { return $this->transactionDateTime; }
        public function getTotal() { return $this->total; }
        public function getNumberOfItems() { return $this->numberOfItems; }
        public function getNumber() { return $this->number; }
    }
?>
