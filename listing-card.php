<?php include('head.php');?>
<body class="m8 lg:m-16">
<div class="w-full mb-16">
    <div class="shadow-md rounded-xl ">
        <img alt="dog" class="rounded-xl" src="../assets/dog1.jpg">
    <span class="font-bold text-lg"><?php if(isset($title)){echo $title;} ?></span>
    <div class="grid grid-cols-2 text-gray-600 text-sm">
        <span>Gender: Male</span>
            <!--<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1" cy="1" r="1"/>
            </svg> -->
        <span>Age: 2 months</span>
    </div>
    <span class="font-bold text-lg"><?php if(isset($price)){echo $price;} ?></span>
    </div>
</div>

<div class="w-full flex flex-wrap gap-x-10 ">
    <div class="shadow-md rounded-xl ">
        <img alt="dog" class="rounded-xl" src="../assets/food.jpg">
        <span class="text-lg"><?php if(isset($title)){echo $title;} ?></span>
        <div class="grid grid-cols-2 text-gray-600 text-sm inline-flex flex-wrap items-center">
            <span>Product: Dog Food</span>
            <!--<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1" cy="1" r="1"/>
            </svg> -->
            <span>Size: 385g</span>
        </div>

    <span class="font-bold text-lg"><?php if(isset($price)){echo $price;} ?></span>
    <div class="sash">
    <span class="bg-beige rounded-xl">Free Toy & Free Shaker</span>
    </div>
    </div>
</div>
</body>