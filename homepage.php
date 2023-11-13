<?php include('head.php');?>
<body class="min-h-screen flex relative max-w-screen-xl mx-auto">
<div class="mt-auto w-full rounded-t-3xl flex flex-col pt-24 pb-12">
    <div class="flex items-center w-full">

        <img alt="happy woman and dog" class="relative" src="../assets/hero.jpg">
        <div class="absolute grid grid-cols-1 px-14">
            <h1 class="font-bold text-primary text-4xl">One more friend</h1>
            <h1 class="text-primary font-bold text-4xl">Thousands more fun!</h1>
        </div>
    </div>

    <div class="grid grid-cols-1">
        <span class="text-primary">Whats new?</span>
        <span class="text-primary">Take a look at some of our pets</span>
    </div>
        <div class="grid grid col-span-4">
        </div>

    <div class="flex">
        <img src="assets/banner1.jpg" class="relative">
        <div class="flex absolute grid grid-cols-1 justify-items-end">
            <h3 class="font-bold text-primary text-4xl">One more friend</h3>
            <h3 class="text-primary font-bold text-4xl">Thousands more fun!</h3>
        </div>
    </div>

    <div class="grid grid-cols-1">
        <span class="text-primary">Hard to choose the right products for your pets?</span>
        <span class="text-primary">Our Products</span>
    </div>
    <div class="grid grid col-span-4">
    </div>


        <div class="grid grid-cols-2>
            <span class="">Proud to be part of</span>
            <span class="text-primary font-bold">Pet Sellers</span>
        </div>
        <div class="grid grid-cols-7 items-center justify-between">
            <img src="assets/logo1.jpg">
            <img src="assets/logo2.jpg">
            <img src="assets/logo3.jpg">
            <img src="assets/logo4.jpg">
            <img src="assets/logo5.jpg">
            <img src="assets/logo6.jpg">
            <img src="assets/logo7.jpg">
        </div>

<div class="grid grid-cols-1">
    <span class="text-primary">You already know?</span>
    <span class="text-primary">Useful Pet Knowledge</span>
</div>
<div class="grid grid col-span-4">
</div>

    <div class="items-center justify-center flex">
        <img src="assets/banner2.jpg">
        <div class="absolute grid grid-cols-1">
            <h3 class="font-bold text-primary text-4xl">Adoption</h3>
            <h3 class="font-bold text-primary text-4xl">We need help. So do they</h3>
            <Span class="text-secondary ">Adopt a pet and give it a home, it will love you back unconditionally</Span>
        </div>
    </div>
    <footer class="bg-beige w-full rounded-t-3xl flex pt-24 pb-12">
        <div class="w-full max-w-screen-xl mx-auto grid grid-cols-1 gap-y-12">
            <div class="bg-primary rounded-xl p-6">
                <div class="flex items-center">
                    <h5 class="text-white flex font-bold text-xl w-full max-w-xs capitalize mr-4">Register now so you don't miss our programs</h5>
                    <div class=" flex w-full bg-white p-4 rounded-xl">
                        <?php includeWithVariables('elements/input.php',
                            array(
                                'type' => 'email',
                                'hidden_label' => 'true',
                                'style' => 'flex-1 ',
                                'container_style' => 'flex-1 mr-4',
                                'placeholder' => 'Enter your Email',)); ?>
                        <?php includeWithVariables('elements/button.php',
                            array('text' => 'Subscribe Now', 'style' => 'button--primary rounded flex-none')); ?>
                    </div>
                </div>
            </div>
    </footer>
    </div>
</body>
