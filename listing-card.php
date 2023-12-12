

<div class="mb-4 justify-center items-center">
    <div class="flex flex-wrap items-center justify-center border border-dashed border-purple-600 p-4 rounded-lg">
        <div class="flex flex-wrap">
            <div class="shadow-md rounded-xl p-2">
                <img alt="dog" class="rounded-xl" src=<?php echo $product['image'];?>>
                <span class="font-bold text-md"><?php echo $product['title'];?> </span>
                <div class="grid grid-cols-2 text-gray-600 text-sm">
                    <span class="font-bold text-md">Gender:<?php echo $product['gender'];?> </span>
                    <span class="font-bold text-md">Age:<?php echo $product['age'];?> </span>
                </div>
                <span class="font-bold text-md">Price:<?php echo $product['price'];?></span>
            </div>
        </div>
    </div>
</div>