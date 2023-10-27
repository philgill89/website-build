<div class="grid grid-cols-1 gap-y-2 p-4">
    <div class="shadow-md rounded-xl px-1.5 pb-8 gap-x-2 ">
    <div class=" rounded-lg ">
        <img alt="dog" class="rounded-xl" src="../assets/dog1.jpg">
    </div>
        <div class="">
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
</div>
