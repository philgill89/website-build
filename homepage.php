<?php include('head.php');?>
<body class="min-h-screen flex flex-col mt-auto w-full">
    <header class="relative max-w-screen-xl mx-auto">
            <div class="w-full">
                <img alt="happy woman and dog" class="w-full relative" src="../assets/hero.jpg">
                <div class="absolute grid grid-cols-1">
                    <span class="font-bold text-primary text-3xl">One more friend</span>
                    <span class="text-primary font-bold">Thousands more fun!</span>
                </div>
            </div>
    </header>
    <!--<div>
        <p>Whats new?</p>
        <h5 class="text-primary font-bold">Take a look at some of our pets</h5>
</div>-->
    <div class="items-center">
        <img src="assets/banner1.jpg">
    </div>

    <div class="">
        <div class="grid grid-cols-1>
        <span class="">Proud to be part of</span>
            <span class="text-primary font-bold">Pet Sellers</span>
        <div class="grid grid-cols-7 items-center flex flex-wrap">
            <img src="assets/logo1.jpg">
            <img src="assets/logo2.jpg">
            <img src="assets/logo3.jpg">
            <img src="assets/logo4.jpg">
            <img src="assets/logo5.jpg">
            <img src="assets/logo6.jpg">
            <img src="assets/logo7.jpg">
        </div>
        </div>
    </div>

    <div class="items-center">
        <img src="assets/banner2.jpg">
    </div>
    <footer class="mt-auto bg-beige w-full rounded-t-3xl flex pt-24 pb-12">
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
