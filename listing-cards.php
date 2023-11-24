<?php include('head.php');?>

<body class="m8 lg:m-16">
<div class="w-full mb-16">
    <div class="flex flex-wrap gap-x-10">

        <?php
            $products = array(
                "dog-1" => array(
                    "title" => "MO231 - Pomeranian White",
                    "price" => "£50.00",
                ),
                "dog-2" => array(
                    "title" => "MO231 - Poodle Tiny Yellow",
                    "price" => "£50.00",
                ),
                "dog-3" => array(
                    "title" => "M0102 - Poodle Tiny Sepia",
                    "price" => "£50.00",
                ),
                 "dog-4" => array(
                    "title" => "M0512 - Alaskan Malamute Grey",
                    "price" => "£50.00",
                ),
                "dog-5" => array(
                    "title" => "MO231 - Pembroke Corgi Cream",
                    "price" => "£50.00",
                ),
                "dog-6" => array(
                    "title" => "MO231 - Pembroke Corgi Tricolour",
                    "price" => "£50.00",
                ),
                "dog-7" => array(
                    "title" => "M0231 - Pomeranian White",
                    "price" => "£50.00",
                ),
                "dog-8" => array(
                    "title" => "M0312 - Poodle Tiny Dairy Cow",
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


       <!-- <div>
            <div class="grid grid-cols-1 gap-y-2 rounded-lg p-4 border border-solid">
                <div class="rounded-xl">
                    <img class="rounded-xl" src="assets/dog1.jpg">
                </div>
                <h5 class="font-bold">MO231 - Pomeranian White</h5>
                <span class="grid grid-cols-2">
                <p>Gender: Male</p>
                <p>Age: 2 months</p>
            </span>
                <h5 class="font-bold">£2000</h5>
            </div>
        </div>
        <div>
            <div class="grid grid-cols-1 gap-y-2 rounded-lg p-4 border border-solid">
            <div class="rounded-xl">
                <img class="rounded-xl" src="assets/food.jpg">
            </div>
            <h5 class="font-bold">MO231 - Pomeranian White</h5>
            <span class="grid grid-cols-2">
                <p>Product: Food</p>
                <p>Weight: 385g</p>
            </span>
            <h5 class="font-bold">£2000</h5>
            </div>
        </div>
        <div>
        </div> -->
    </div>
    <?php if(isset($title)){echo $title;} ?>
    <?php if(isset($price)){echo $price;} ?>
    <?php if(isset($price)){echo $price;} ?>

</div>
</body>