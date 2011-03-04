<?php

    require_once( dirname(__FILE__)."/Item.php" );
    
    class ItemList
    {
        private $itemListId;
        private $list;
        
        public function __construct($itemList)
        {
            $this->setItemListId($itemList["itemListId"]);
            $this->setList($itemList["list"]);
        }
        public function __destruct()
        {
        }

        /*
         * Set ItemList fields
         */
        public function setItemListId($x)
        {
            $this->itemListId = $x;
        }
        public function setList($x)
        {
            //print_r($x)."\n\n";
            $i=0;
            foreach($x as $val)
            {
                //print_r($val)."\n";
                print "i:".$i."\n";
                $this->list[$i] = new Item($val);
                $i++;
            }
        }

        /*
         * Get ItemList fields
         */
        public function getItemListId(){ return $this->itemListId; }
        public function getList(){ return $this->list; }
    }

?>
