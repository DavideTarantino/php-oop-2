<?php 
    include_once __DIR__ .'/Models/Products.php';
    include_once __DIR__ .'/Models/Discounted.php';

    $firstProduct = new Discounted('./Assets/img/crocchette per gatti.webp', 'Cibo', 12.50, 'Gatti', 'Crocchette per Gatti', false);
    $secondProduct = new Discounted('./Assets/img/osso di gomma.jpg', 'Giocattoli', 7, 'Cani', 'Osso di Gomma', false);
    $thirdProduct = new Discounted('./Assets/img/filtro per acquario.jpg', "Cura dell'acquario", 22.50, 'Acquariologia', 'Filtro per Acquario', true)

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Assets/style.css">
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
                        <p>Scontato: <?php echo ($element->discount == true)? 'si' : 'no'; ?></p>
                        <p>Percentuale di sconto: <?php echo ($element->discount == true)? $element->dscpercent() : '0%'; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
    </body>
    </html>