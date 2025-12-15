<?php include 'includes/header.php'; ?>
<?php
$pizzas = [
    [
        'name' => 'Margherita',
        'desc' => 'Rajčatové sugo, mozzarella, čerstvá bazalka.',
        'price' => '259 Kč',  
        'img' => 'images/margherita.png'
    ],
    [
        'name' => 'Šunková',
        'desc' => 'Rajčatové sugo, mozzarella, šunka.',
        'price' => '279 Kč',
        'img' => 'images/sunkova.png'
    ],
    [
        'name' => 'Salámová',
        'desc' => 'Rajčatové sugo, mozzarella, salám.',
        'price' => '279 Kč',
        'img' => 'images/salami.png'
    ],
    [
        'name' => 'Hawaii',
        'desc' => 'Rajčatové sugo, mozzarella, šunka, ananas.',
        'price' => '289 Kč',
        'img' => 'images/hawaii.png'
    ],
    [
        'name' => 'Šunka + žampiony',
        'desc' => 'Rajčatové sugo, mozzarella, šunka, žampiony.',
        'price' => '289 Kč',
        'img' => 'images/sunka-zampiony.png'
    ],
    [
        'name' => 'Five Cheeses',
        'desc' => 'Bílý základ, mix sýrů (mozzarella, eidam, cheddar, niva, Grana Padano).',
        'price' => ' 289 Kč',
        'img' => 'images/five-cheeses-.png'
    ],
    [
        'name' => 'Hot Bacon',
        'desc' => 'Rajčatové sugo, mozzarella, slanina, salám, cibule, chilli.',
        'price' => '289 Kč',
        'img' => 'images/hotbacon.png'
    ],
    [
        'name' => 'Pepperoni Cheese',
        'desc' => 'Rajčatové sugo, mozzarella, salám, cibule, niva.',
        'price' => '289 Kč',
        'img' => 'images/peperoni.png'
    ],
    [
        'name' => 'Brusinková',
        'desc' => 'Bílý základ, mozzarella, šunka, camembert, brusinky.',
        'price' => '289 Kč',
        'img' => 'images/brusinkova.png'
    ],
    [
        'name' => 'Vulcano',
        'desc' => 'Bílý základ, mozzarella, salám, cibule, jalapeňo, chilli, niva.',
        'price' => '299 Kč',
        'img' => 'images/vulcano.png'
    ],
    [
        'name' => 'Budapest',
        'desc' => 'Bílý základ, mozzarella, maďarská klobása, cibule, balkánský sýr, chilli.',
        'price' => '299 Kč',
        'img' => 'images/budapest-.png'
    ],
    [
        'name' => 'White Bacon',
        'desc' => 'Bílý základ, mozzarella, slanina, cibule, niva.',
        'price' => ' 299 Kč',
        'img' => 'images/white-bacon-.png'
    ],
    [
        'name' => 'Kuřecí',
        'desc' => 'Rajčatové sugo, mozzarella, kuřecí maso, špenát, niva.',
        'price' => '299 Kč',
        'img' => 'images/kureci.png'
    ],
    [
        'name' => 'Mexicana Deluxe',
        'desc' => 'Bílý základ, rajčatové sugo, mozzarella, slanina, salám, klobása, cibule, paprika, kukuřice, chilli, jalapeňo.',
        'price' => ' 299 Kč',
        'img' => 'images/chicken-deluxe.png'
    ],
    [
        'name' => 'King’s',
        'desc' => 'Bílý základ, mozzarella, salám, chorizo, cibule, mix sýrů (eidam, cheddar), balkánský sýr, King’s dip.',
        'price' => '309 Kč',
        'img' => 'images/spenatova.png'
    ],
    [
        'name' => 'Country',
        'desc' => 'Bílý základ, mozzarella, slanina, klobása, cibule, balkánský sýr, eidam, cheddar, vejce.',
        'price' => ' 319 Kč',
        'img' => 'images/chicago.png'
    ],
    [
        'name' => 'Rud’s Chef',
        'desc' => 'Rajčatové sugo, mozzarella, salám, chorizo, žampiony, olivy, beraní rohy, niva.',
        'price' => '319 Kč',
        'img' => 'images/vegetariana.png'
    ]
];
?>


<div class="menu-container">
<?php foreach ($pizzas as $pizza): ?>
<div class="pizza-card">
<img src="<?= $pizza['img'] ?>" alt="<?= $pizza['name'] ?>">
<div class="content">
<h3><?= $pizza['name'] ?></h3>
<p><?= $pizza['desc'] ?></p>
<div class="pizza-price"><?= $pizza['price'] ?></div>
</div>
</div>
<?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>
