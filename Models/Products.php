<?php 
    class Product{
        public $image;
        public $type;
        private $price;
        public $category;
        public $title;

        public function __construct($_image, $_type, $_price, $_category, $_title){
            $this->image = $_image;
            $this->type = $_type;
            $this->price = $_price;
            $this->category = $_category;
            $this->title = $_title;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setPrice($price){
            $this->price = $price;
        }
    }
?>