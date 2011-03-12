<?php

    class paymentMethod
    {
        private $paymentMethodId;
        private $name;
        private $debitCardNumber;
        private $creditCardNumber;
        private $paypalEmail;


        public function __construct($x)
        {
            $this->setPaymentMethodId($x["paymentMethodId"]);
            $this->setName($x["name"]);
            $this->setDebitCardNumber($x["debitCardNumber"]);
            $this->setCreditCardNumber($x["creditCardNumber"]);
            $this->setPaymentMethodId($x["paypalEmail"]);

        }
        public function __destruct()
        {

        }

        /*
         * Set PaymentMethod fields
         */
        public function setPaymentMethodId($x) { $this->paymentMethodId = $x; }
        public function setName($x) { $this->name = $x; }
        public function setDebitCardNumber($x) { $this->debitCardNumber = $x; }
        public function setCreditCardNumber($x) { $this->creditCardNumber = $x; }
        public function setPaypalEmail($x) { $this->paypalEmail = $x; }

        /*
         * Get PaymentMethod fields
         */
        public function getPaymentMethodId() { return $this->paymentMethodId; }
        public function getName() { return $this->name; }
        public function getDebitCardNumber() { return $this->debitCardNumber; }
        public function getCreditCardNumber() { return $this->creditCardNumber; }
        public function getPaypalEmail() { return $this->paypalEmail; }
    }

?>
