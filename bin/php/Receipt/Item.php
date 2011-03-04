<?php
    require_once( dirname(__FILE__)."/Category.php" );

    class Item
    {
        private $itemId;
        private $category;
        private $name;
        private $quantity;
        private $price;
        private $total;


        public function __construct($item)
        {
            $this->setItemId($item["itemId"]);
            $this->setCategory($item["category"]);
            $this->setName($item["name"]);
            $this->setQuantity($item["quantity"]);
            $this->setPrice($item["price"]);
            $this->setTotal($item["total"]);
        }
        public function  __destruct()
        {
        }
        
        /*
         * Set Item fields
         */
        public function setItemId($x) { $this->itemId = $x; }
        public function setCategory($x) { $this->category = new Category($x); }
        public function setName($x) { $this->name = $x; }
        public function setQuantity($x) { $this->quantity = $x; }
        public function setPrice($x) { $this->price = $x; }
        public function setTotal($x) { $this->total = $x; }

        /*
         * Get Item fields
         */
        public function getItemId() { return $this->itemId; }
        public function getCategory() { return $this->category; }
        public function getName() { return $this->name; }
        public function getQuantity() { return $this->quantity; }
        public function getPrice() { return $this->price; }
        public function getTotal() { return $this->total; }
    }

?>
