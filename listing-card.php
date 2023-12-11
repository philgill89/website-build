
<body class="lg:m-16">
<div class="mb-4 justify-center items-center">

</div>

<div class="flex flex-wrap items-center justify-center grid grid-cols-4 border border-dashed border-purple-600 p-4 rounded-lg">
    <div class="flex flex-wrap>
        <div class="shadow-md rounded-xl p-2">
            <img alt="dog" class="rounded-xl" src="<?php echo $product['image'];?>">
            <span class="font-bold text-lg"><?php echo $product['title'];?> </span>
            <div class="grid grid-cols-2 text-gray-600 text-sm">
                <span class="font-bold text-lg">Gender:<?php echo $product['gender'];?> </span>
                <span class="font-bold text-lg">Age:<?php echo $product['age'];?> </span>
            </div>
            <span class="font-bold text-lg">Price:<?php echo $product['price'];?></span>
        </div>
    </div>
</body>