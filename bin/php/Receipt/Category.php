<?php

    class Category
    {
        private $categoryId;
        private $name;

        public function __construct($category)
        {
            $this->setCategoryId($category["categoryId"]);
            $this->setName($category["name"]);
        }

        public function __desnstruct()
        {

        }
        
        /*
         * Set Category fields
         */
        public function setCategoryId($x) { $this->categoryId = $x; }
        public function setName($x) { $this->name = $x; }

        /*
         * Get Category fields
         */
        public function getCategoryId() { return $this->categoryId; }
        public function getFood() { return $this->name; }
    }

?>
