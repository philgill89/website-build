<?php include('head.php');?>

<body class="m8 lg:m-16">
<div class="w-full mb-16">
    <div class="flex flex-wrap gap-8">
        <div>
            <div class="grid grid-cols-1 p-8 rounded-lg">
                <div class="rounded-xl">
                    <img src="assets/dog1.jpg">
                </div>
                <h5>MO231 - Pomeranian White</h5>
                <span>
                <p>Gender: Male</p>
                <p>Age: 2 months</p>
            </span>
                <h5>£2000</h5>
            </div>
        </div>
        <div>
            <div class=grid grid-cols-1 items-center gap-8 p-8 rounded-lg">
            <div class="rounded-xl">
                <img class="rounded-xl" src="assets/food.jpg">
            </div>
            <h5>MO231 - Pomeranian White</h5>
            <span>
                <p>Product: Food</p>
                <p>Weight: 385g</p>
            </span>
            <h5>£2000</h5>

                <?php includeWithVariables('elements/button.php',
                    array('text' => 'Free Toy & Free Shaker', 'style' => 'button--secondary rounded-xl bg-beige text-black')); ?>
            </div>
        </div>
        <div>
        </div>
    </div>
</div>
</body>