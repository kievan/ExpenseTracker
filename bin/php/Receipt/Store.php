<?php

    require_once( dirname(__FILE__)."/StoreName.php" );

    class Store
    {
        private $storeId;
        private $name;
        private $telephone;
        private $address;

        public function __construct($store)
        {
            $this->setStoreId($store["storeId"]);
            $this->setName($store["name"]);
            $this->setTelephone($store["telephone"]);
            $this->setAddress($store["address"]);
        }
        
        public function  __destruct()
        {
        }

        /*
         * Set Store fields
         */
        public function setStoreId($x) { $this->storeId = $x; }
        public function setName($x) { $this->name = new StoreName($x); }
        public function setTelephone($x) { $this->telephone = $x; }
        public function setAddress($x) { $this->address = $x; } 
        
        /*
         * Get Store fields
         */
        public function getStoreId() { return $this->storeId; }
        public function getName() { return $this->name; }
        public function getTelephone() { return $this->telephone; }
        public function getAddress() { return $this->address; } 
    }

?>
