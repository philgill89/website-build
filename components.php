<?php include('head.php'); ?>

<body class="m8 lg:m-16">
    <div class="w-full mb-16">
        <h2 class="font-bold text-3xl mb-8">Buttons</h2>
        <div class="flex flex-wrap gap-8">
            <div>
                <div class="mb-4">
                    <h3 class="text-lg">
                        Primary Button
                    </h3>
                </div>
                <div class="inline-flex flex-wrap items-center gap-8 border border-dashed border-purple-600 p-8 rounded-lg">
                    <?php includeWithVariables('elements/button.php',
                        array('text' => 'Click Here', 'style' => 'button--primary')); ?>
                    <?php includeWithVariables('elements/button.php',
                        array('text' => 'Click Here', 'style' => 'button--primary', 'icon' => 'caret-circle-right')); ?>
                    <?php includeWithVariables('elements/button.php',
                        array('style' => 'button--primary', 'icon' => 'caret-circle-right')); ?>
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <h3 class="text-lg">
                        Secondary Button
                    </h3>
                </div>
                <div class="inline-flex flex-wrap items-center gap-8 border border-dashed border-purple-600 p-8 rounded-lg">
                    <?php includeWithVariables('elements/button.php',
                        array('text' => 'Click Here', 'style' => 'button--secondary')); ?>
                    <?php includeWithVariables('elements/button.php',
                        array('text' => 'Click Here', 'style' => 'button--secondary', 'icon' => 'caret-circle-right')); ?>
                    <?php includeWithVariables('elements/button.php',
                        array('style' => 'button--secondary', 'icon' => 'caret-circle-right')); ?>
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <h3 class="text-lg">
                        Ghost Button
                    </h3>
                </div>
                <div class="inline-flex flex-wrap items-center gap-8 border border-dashed border-purple-600 p-8 rounded-lg">
                    <?php includeWithVariables('elements/button.php',
                        array('text' => 'Click Here', 'style' => 'button--ghost')); ?>
                    <?php includeWithVariables('elements/button.php',
                        array('text' => 'Click Here', 'style' => 'button--ghost', 'icon' => 'caret-circle-right')); ?>
                    <?php includeWithVariables('elements/button.php',
                        array('style' => 'button--ghost', 'icon' => 'caret-circle-right')); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full mb-16">
        <h2 class="font-bold text-3xl mb-8">Inputs</h2>
        <div>
            <div class="mb-4">
                <h3 class="text-lg">
                    Input Fields
                </h3>
            </div>
            <div class="inline-flex flex-wrap items-start gap-8 border border-dashed border-purple-600 p-8 rounded-lg">
                <?php includeWithVariables('elements/input.php',
                    array(
                        'type' => 'email',
                        'hidden_label' => true,
                        'style' => '',
                        'placeholder' => 'Enter your name',
                        'name' => 'Email',
                        'label' => 'Your Email'));
                ?>
                <?php includeWithVariables('elements/input.php',
                    array(
                        'type' => 'email',
                        'style' => '',
                        'placeholder' => 'Enter your name',
                        'name' => 'Email',
                        'label' => 'Your Email'));
                ?>
                <?php includeWithVariables('elements/input.php',
                    array(
                        'type' => 'email',
                        'style' => 'input--error',
                        'error' => 'Empty text',
                        'placeholder' => 'Enter your name',
                        'name' => 'Email',
                        'label' => 'Your Email'));
                ?>
            </div>
        </div>
    </div>

    <div class="w-full mb-16">
        <h2 class="font-bold text-3xl mb-8">Footer</h2>
        <div>
            <div class="mb-4">
                <h3 class="text-lg">
                    Newsletter Section
                </h3>
            </div>
            <div class="flex bg-primary items-center gap-6 border border-dashed border-purple-600 p-2 rounded-xl w-full ">
                <div class="text-white flex font-bold text-xl w-full max-w-xs capitalize">Register now so you don't miss our programs</div>
                <div class=" flex-1  p-8">
                    <div class=" flex w-full  bg-white p-4 rounded-xl">
                        <?php includeWithVariables('elements/input.php',
                            array(
                                'type' => 'email',
                                'style' => 'flex-1 ',
                                'container_style' => 'flex-1 ',
                                'placeholder' => 'Enter your Email',)); ?>
                        <?php includeWithVariables('elements/button.php',
                            array('text' => 'Subscribe Now', 'style' => 'button--primary rounded flex-none')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>