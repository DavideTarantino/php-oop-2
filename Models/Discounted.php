<?php 
    include_once __DIR__ .'../../Traits/DiscountPercent.php';

    class Discounted extends Product{

        use DiscountPercent;

        public $discount;

        public function __construct($_image, $_type, $_price, $_category, $_title, $_discount){
            parent::__construct( $_image, $_type, $_price, $_category, $_title );
            $this->discount = $_discount;
        }
    }
?>