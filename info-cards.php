<?php
$listings = [
    "product-1" => [
        "image" => "/assets/product1.jpg",
        "title" => "Reflex Plus Adult Cat Food Salmon",
        "product" => "Cat Food",
        "size" => "385g",
        "price" => "£50.00",
    ],
    "product-2" =>[
        "image" => "/assets/product2.jpg",
        "title" => "Reflex Plus Adult Cat Food",
        "product" => "Cat Food",
        "size" => "1.5kg",
        "price" => "£50.00",
    ],
    "product-3" =>[
        "image" => "/assets/product3.jpg",
        "title" => "Cat Scratching Ball Toy Kitten Sisal Rope Ball",
        "product" => "Toy",
        "price" => "£50.00",
    ],
    "product-4" =>[
        "image" => "/assets/product4.jpg",
        "title" => "Cute Pet Cat Warm Nest",
        "product" => "Toy",
        "price" => "£50.00",
    ],
    "product-5" =>[
        "image" => "/assets/product5.jpg",
        "title" => "NaturVet Dogs- Omega-Gold Plus Salmon Oil",
        "product" => "Dog Food",
        "size" => "385g",
        "price" => "£50.00",
    ],
    "product-6" =>[
        "image" => "/assets/product6.jpg",
        "title" => "Costumes Fashion Pet Clother Cowboy Rider",
        "product" => "Costume",
        "size" => "02 months",
        "price" => "£50.00",
    ],
    "product-7" =>[
        "image" => "/assets/product7.jpg",
        "title" => "Costumes Chicken Drumstick Headband",
        "product" => "Costume",
        "price" => "£50.00",
    ],
    "product-8" =>[
        "image" => "/assets/product8.jpg",
        "title" => "Plush Pet Toy",
        "Product" => "Toy",
        "price" => "£50.00",
    ],
];
?>

<div class="w-full gap-4 grid grid-cols-4">
    <?php foreach ($products as $product) : ?>
        <?php include 'info-card.php'
        ?>

    <?php endforeach; ?>
</div>