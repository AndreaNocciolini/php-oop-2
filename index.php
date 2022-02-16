<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once __DIR__ . '/classes/User.php' ?>
    <?php require_once __DIR__ . '/classes/Product.php' ?>

    <?php $newUser = new User('Pollo', 'Cosimo', 'Pozzo@latico.com', 26);
    $newUser->printUser();
    $newUser->setCreditCards([
        new creditcard(5777129143567766, 2020, 777),
    ]);
    $newUser->setLevel('gold');
    ?>
    <ul>
        <li><?php
            var_dump($newUser->getLevel()); ?></li>
        <li><?php
            var_dump($newUser->getCreditCards()); ?></li>
    </ul>
    <?php $newProduct = new Product('Pollo', 29.99);
    $newProduct->setFunctionality('Lorem ipsum polletti');
    foreach ($newProduct as $key => $value) {
        if ($value === null) {
            // Do nothing
        } else {
            echo '<h3>' . $key . ': ' . $value . '.';
        }
    }
    ?>
</body>

</html>