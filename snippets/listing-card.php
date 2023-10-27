<div class="grid grid-cols-1 gap-y-2 rounded-lg p-4 border border-solid">
    <div class="rounded-xl">
        <img alt="dog" class="rounded-xl" src="../assets/dog1.jpg">
    </div>
    <span class="font-bold"><?php if(isset($title)){echo $title;} ?></span>
    <div class="grid grid-cols-2">
        <span>Gender: Male</span>
        <span>Age: 2 months</span>
    </div>
    <span class="font-bold"><?php if(isset($price)){echo $price;} ?></span>
</div>
