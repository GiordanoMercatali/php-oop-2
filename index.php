<?php
// require_once __DIR__ . "/models/Category.php";
// require_once __DIR__ . "/models/Product.php";
// require_once __DIR__ . "/models/Food.php";
// require_once __DIR__ . "/models/Toy.php";
// require_once __DIR__ . "/models/Kennel.php";

require_once __DIR__ . "/database/categories_db.php";

/*
$dog = new Category ('dog', 'dog.png');
var_dump($dog);

$cat = new Category ('cat', 'cat.png');
var_dump($cat);

$anti_fleas = new Product ('anti-fleas', 'anti-fleas.png', 'dog', 40 );
var_dump($anti_fleas);

$wood_kennel = new Kennel ('wood kennel', 'wood-kennel.png', 'dog', 100, 'big' );
var_dump($wood_kennel);

$stuffed_mouse = new Toy ('stuffed mouse', 'stuffed-mouse.png', 'cat', 3, 'polyester', 'stuffed animal' );
var_dump($stuffed_mouse);

$salmon_tin = new Food ('salmon tin', 'salmon-tin.png', 'cat', 5 );
var_dump($salmon_tin);
*/

// var_dump($schesir);
// var_dump($bone);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>
        <?php foreach($item_list as $item) { ?>
        <div>
            <h4><?php echo $item->getName(); ?></h4>
            <div>
                <span> <?php echo $item->getCategory()->getName(); ?> </span>
                <?php if(is_a($item, 'Food')) { ?>
                    <span> <?php echo $item->getExpired() ?> </span> 
                    <?php } ?>
            </div>
        </div>
        <?php } ?>
    </section>

    <!-- <p><?php echo $schesir->getName() . ' for ' . $schesir->getCategory()->getName() . ' at the flavor of ' . $schesir->getFlavor() . '. Price: ' . $schesir->getPrice() . '€. To consume before: ' . $schesir->getExpired()  ?> </p> -->
    <!-- <p><?php echo $bone->getName() . ' for ' . $bone->getCategory()->getName() . ' ' . $bone->getPrice() . '€. Is a ' . $bone->type . ' made of ' . $bone->material  ?> </p> -->
</body>
</html>