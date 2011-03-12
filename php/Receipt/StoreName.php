<?php

    class StoreName
    {
        private $storeNameId;
        private $general;
        private $specific;

        public function __construct($storeName)
        {
            $this->setGeneral($storeName["storeNameId"]);
            $this->setGeneral($storeName["general"]);
            $this->setSpecific($storeName["specific"]);
        }
        public function  __destruct()
        {
        }
        
        /*
         * Set StoreName fields
         */
        public function setStoreNameId($x) { $this->storeNameId = $x; }
        public function setGeneral($x) { $this->general = $x; }
        public function setSpecific($x) { $this->specific = $x; } 

        /*
         * Get StoreName fields
         */
        public function getStoreNameId() { return $this->storeNameId; }
        public function getGeneral() { return $this->general; }
        public function getSpecific() { return $this->specific; }
    }

?>
