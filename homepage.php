<?php include('head.php');?>
<body class="" xmlns="http://www.w3.org/1999/html">
<nav class="w-full justify-center absolute inset-x-0 z-50">
    <div class="w-full flex flex-wrap items-center mx-auto justify-center">
        <div class="items-center w-full container">
            <?php includeWithVariables('sections/header.php',
                array('',));?>
        </div>
    </div>
</nav>

<div class="">
    <div class=" flex flex-wrap items-center object-cover isolate overflow-hidden">
        <div class="w-full">
            <img alt="happy woman and dog" class="w-full bg-cover relative" src="../assets/hero.jpg" />
        </div>

        <div class="flex flex-col w-full absolute text-left mr-8 ">
            <span class=" text-5xl text-primary font-bold">
               One More Friend
            </span>
            <span class="text-5xl text-primary font-bold">
                Thousands More Fun!
            </span>
            <span class="text-md text-primary mb-8 mt-8 w-5/12">
                Having a pet means you have more joy, a new friend, a happy person who will always be with you to have fun. We have 200+ different pets that can meet your needs!
            </span>
            <div class="flex flex-wrap gap-6">
                <?php includeWithVariables('elements/button.php',
                    array('text' => 'View Intro', 'style' => 'button--ghost', 'icon' => 'caret-circle-right')); ?>
                <?php includeWithVariables('elements/button.php',
                    array('text' => 'Explore Now', 'style' => 'button--primary')); ?>
            </div>
        </div>
    </div>
</div>


<div class="w-full flex grid grid-cols-1 ">
    <span class="text-lg text-primary">Whats new?</span>
    <span class=" text-lg font-bold text-primary">Take a look at some of our pets</span>
    <div class="flex grid grid-cols-4">
    </div>
</div>
<div class="grid grid-cols-1">
    <span class="text-primary text-lg font-bold text-primary">Hard to choose the right products for your pets?</span>
    <span class="text-primary text-lg font-bold text-primary">Our Products</span>
</div>

<div class="w-full flex flex-wrap items-center justify-center">
    <img src="assets/banner1.jpg" class="relative">
    <div class="flex absolute grid grid-cols-1 container text-right">
        <span class="font-bold text-primary mt-2 text-5xl">One more friend</span>
        <span class="text-primary font-bold text-4xl">Thousands more fun!</span>
        <div class="flex flex-wrap justify-end gap-6">
            <?php includeWithVariables('elements/button.php',
                array('text' => 'View Intro', 'style' => 'button--ghost', 'icon' => 'caret-circle-right')); ?>
            <?php includeWithVariables('elements/button.php',
                array('text' => 'Explore Now', 'style' => 'button--primary')); ?>
        </div>
    </div>

</div>


<div class="flex grid grid-cols-1">
    <span class="text-primary text-lg">Hard to choose the right products for your pets?</span>
    <span class="text-primary font-bold text-lg">Our Products</span>
</div>
<div class="grid grid-cols-4">
</div>

<div class="flex grid grid-cols-4 items-center justify-center">
</div>
<div class="flex flex-wrap">
    <div class="items-center grid-cols-2">
    <span class="text-primary">Proud to be part of</span>
    <span class="text-primary font-bold text-lg">Pet Sellers</span>
        <?php includeWithVariables('elements/button.php',
            array('text' => 'view more', 'style' => 'button--ghost')); ?>
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
</div>

<div class="items-center flex justify-center">
    <img src="assets/banner2.jpg">
    <div class="absolute grid grid-cols-1 container">
        <span class="font-bold text-primary text-5xl">Adoption</span>
        <span class="font-bold text-primary text-4xl">We need help. So do they</span>
        <Span class="text-primary w-6/12 ">Adopt a pet and give it a home, it will love you back unconditionally</Span>
        <div class="flex flex-wrap justify-start gap-6">
            <?php includeWithVariables('elements/button.php',
                array('text' => 'View Intro', 'style' => 'button--ghost', 'icon' => 'caret-circle-right')); ?>
            <?php includeWithVariables('elements/button.php',
                array('text' => 'Explore Now', 'style' => 'button--primary')); ?>
        </div>
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
</body>
