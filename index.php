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
            $this-> = $price;
        }
    }

    $firstProduct = new Product('./img/crocchette per gatti.webp', 'Cibo', 12.50, 'Gatti', 'Crocchette per Gatti');
    $secondProduct = new Product('./img/osso di gomma.jpg', 'Giocattoli', 7, 'Cani', 'Osso di Gomma');
    $thirdProduct = new Product('./img/filtro per acquario.jpg', "Cura dell'acquario", 22.50, 'Acquariologia', 'Filtro per Acquario');

    ?>