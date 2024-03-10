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

    $firstProduct = new Product('./img/crocchette per gatti.webp', 'Cibo', 12.50, 'Gatti', 'Crocchette per Gatti');
    $secondProduct = new Product('./img/osso di gomma.jpg', 'Giocattoli', 7, 'Cani', 'Osso di Gomma');
    $thirdProduct = new Product('./img/filtro per acquario.jpg', "Cura dell'acquario", 22.50, 'Acquariologia', 'Filtro per Acquario');

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <title>BoolPlanet</title>
    </head>
    <body>
        <header>
            <div>
                <h1>
                    BoolPlanet
                </h1>
                <h4>
                    Are you a good friend for your pet? Weel, this is your ideal place.  
                </h4>
            </div>
        </header>
        <main>
            <div id='main-container'>
                <?php foreach([$firstProduct, $secondProduct, $thirdProduct] as $element): ?>
                <div id="card-container">
                    <div id="single-card">
                        <img src="<?php echo $element->image; ?>" alt="img">
                        <h3><?php echo $element->title; ?></h3>
                        <p>Tipo: <?php echo $element->type; ?></p>
                        <p>Categoria: <?php echo $element->category; ?></p>
                        <p>Prezzo: <?php echo $element->getPrice(); ?> $</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
    </body>
    </html>