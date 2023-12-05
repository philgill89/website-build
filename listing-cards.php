<?php include('head.php');?>

<body class="m8 lg:m-16">
<div class="w-full mb-16">
    <div class="flex flex-wrap gap-x-10">

        <?php
            $products = array(
                "dog-1" => array(
                    "title" => "MO231 - Pomeranian White",
                    "Gender" => "Male",
                    "Age" => "02 months",
                    "price" => "£50.00",
                ),
                "dog-2" => array(
                    "title" => "MO231 - Poodle Tiny Yellow",
                    "Gender" => "Female",
                    "Age" => "02 months",
                    "price" => "£50.00",
                ),
                "dog-3" => array(
                    "title" => "M0102 - Poodle Tiny Sepia",
                    "Gender" => "Male",
                    "Age" => "02 months",
                    "price" => "£50.00",
                ),
                 "dog-4" => array(
                    "title" => "M0512 - Alaskan Malamute Grey",
                    "Gender" => "Male",
                    "Age" => "02 months",
                    "price" => "£50.00",
                ),
                "dog-5" => array(
                    "title" => "MO231 - Pembroke Corgi Cream",
                    "Gender" => "Male",
                    "Age" => "02 months",
                    "price" => "£50.00",
                ),
                "dog-6" => array(
                    "title" => "MO231 - Pembroke Corgi Tricolour",
                    "Gender" => "Female",
                    "Age" => "02 months",
                    "price" => "£50.00",
                ),
                "dog-7" => array(
                    "title" => "M0231 - Pomeranian White",
                    "Gender" => "Female",
                    "Age" => "02 months",
                    "price" => "£50.00",
                ),
                "dog-8" => array(
                    "title" => "M0312 - Poodle Tiny Dairy Cow",
                    "Gender" => "Male",
                    "Age" => "02 months",
                    "price" => "£50.00",
                ),
            );
        ?>

        <?php
        $products = array(
            "product-1" => array(
                "title" => "Reflex Plus Adult Cat Food",
                "Product" => "Cat Food",
                "Size" => "385g",
                "price" => "£50.00",
            ),
            "product-2" => array(
                "title" => "Reflex Plus Adult Cat Food Salmon",
                "Product" => "Cat Food",
                "Size" => "1.5kg",
                "price" => "£50.00",
            ),
            "product-3" => array(
                "title" => "Cat scratching ball toy kitten slsal rope ball",
                "Product" => "Toy",
                "price" => "£50.00",
            ),
            "product-4" => array(
                "title" => "Cute Pet Cat Warm Nest",
                "Product" => "Toy",
                "price" => "£50.00",
            ),
            "product-5" => array(
                "title" => "NaturVet Dogs - Omega-Gold Plus Salmon Oil",
                "Product" => "Dog Food",
                "Size" => "385g",
                "price" => "£50.00",
            ),
            "product-6" => array(
                "title" => "Costume Fashion Pet Clother Cowboy Rider",
                "Product" => "Costume",
                "Size" => "Small",
                "price" => "£50.00",
            ),
            "product-7" => array(
                "title" => "M0231 - Pomeranian White",
                "Product" => "Costume",
                "Size" => "Medium",
                "price" => "£50.00",
            ),
            "product-8" => array(
                "title" => "Plush Pet Toy",
                "product" => "Toy",
                "price" => "£50.00",
            ),
        );
        ?>








        <?php foreach($products as $product){
            includeWithVariables('/listing-card.php',
                array('title' => $product['title'], 'price' => $product['price']));
            }
        ?>

        <?php includeWithVariables('/listing-card.php',
            array('title' => 'MO231 - Pomeranian White')); ?>

        <?php includeWithVariables('/listing-card.php',
            array('title' => 'test')); ?>

    </div>
    <?php if(isset($title)){echo $title;} ?>
    <?php if(isset($price)){echo $price;} ?>
    <?php if(isset($price)){echo $price;} ?>

</div>
</body>