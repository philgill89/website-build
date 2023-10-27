<?php include('head.php');?>
<body class="min-h-screen flex flex-col">
    <header class="bg-beige w-full flex pt-24 pb-12">
        <div class="w-full relative max-w-screen-xl mx-auto flex items-center justify-around">
            <div class="relative">
                <img src="assets/hero.png"
                    <div class="absolute text-center">
                        <h1 class="font-bold text-primary">One more friend</h1>
                        <h2 class="text-primary font-bold">Thousands more fun!</h2>
                     </div>
            </div>
        </div>
    </header>
    <div>
        <p>Whats new?</p>
        <h5 class="text-primary font-bold">Take a look at some of our pets</h5>
<div class="grid grid-cols-4">

</div>
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
