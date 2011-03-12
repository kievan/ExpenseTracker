<?php

    class tax
    {
        private $taxId;
        private $taxPercent;
        private $taxTotal;

        public function __construct($x)
        {
            $this->setTaxId($x["taxId"]);
            $this->setTaxPercent($x["percent"]);
            $this->setTaxTotal($x["total"]);
        }
        public function __destruct()
        {
        }

        /*
         * Set Tax fields
         */
        public function setTaxId($x) { $this->taxId = $x; }
        public function setTaxPercent($x) { $this->taxPercent = $x; }
        public function setTaxTotal($x) { $this->taxTotal = $x; }

        /*
         * Get Tax fields
         */
        public function getTaxId() { return $this->taxId; }
        public function getTaxPercent() { return $this->taxPercent; }
        public function getTaxTotal() { return $this->taxTotal; }
    }

?>
