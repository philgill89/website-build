<?php include('head.php');?>

<body class="m8 lg:m-16">
<div class="w-full mb-16">
    <div class="flex flex-wrap gap-x-10 items-center">
        <div>
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

                <?php includeWithVariables('elements/button.php',
                    array('text' => 'Free Toy & Free Shaker', 'style' => 'button--secondary rounded-xl bg-beige text-black font-bold')); ?>
            </div>
        </div>
        <div>
        </div>
    </div>
</div>
</body>