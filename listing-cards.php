<?php include('head.php'); ?>

<body class="m-8 lg:m-16">
<div class="w-full mb-16">
    <div class="flex w-full items-center justify-center">

        <?php
        $products = [
            "dog-1" => [
                "image" => "/assets/dog1.jpg",
                "title" => "MO231 - Pomeranian White",
                "gender" => "Male",
                "age" => "02 months",
                "price" => "£50.00",
            ],
            "dog-2" =>[
                "image" => "/assets/dog2.jpg",
                "title" => "MO231 - Poodle Tiny Yellow",
                "gender" => "Female",
                "age" => "02 months",
                "price" => "£50.00",
            ],
            "dog-3" =>[
                "image" => "/assets/dog3.jpg",
                "title" => "M0102 - Poodle Tiny Sepia",
                "gender" => "Male",
                "age" => "02 months",
                "price" => "£50.00",
            ],
            "dog-4" =>[
                "image" => "/assets/dog4.jpg",
                "title" => "M0512 - Alaskan Malamute Grey",
                "gender" => "Male",
                "age" => "02 months",
                "price" => "£50.00",
            ],
            "dog-5" =>[
                "image" => "/assets/dog5.jpg",
                "title" => "MO231 - Pembroke Corgi Cream",
                "gender" => "Male",
                "age" => "02 months",
                "price" => "£50.00",
            ],
            "dog-6" =>[
                "image" => "/assets/dog6.jpg",
                "title" => "MO231 - Pembroke Corgi Tricolour",
                "gender" => "Female",
                "age" => "02 months",
                "price" => "£50.00",
            ],
            "dog-7" =>[
                "image" => "/assets/dog7.jpg",
                "title" => "M0231 - Pomeranian White",
                "gender" => "Female",
                "age" => "02 months",
                "price" => "£50.00",
            ],
            "dog-8" =>[
                "image" => "/assets/dog8.jpg",
                "title" => "M0312 - Poodle Tiny Dairy Cow",
                "gender" => "Male",
                "age" => "02 months",
                "price" => "£50.00",
            ],
        ];
        ?>

        <div class="w-full gap-4 grid grid-cols-4">
            <?php foreach ($products as $product) : ?>
                <?php include 'listing-card.php'
                ?>

            <?php endforeach; ?>
        </div>
</div>
</body>
</html