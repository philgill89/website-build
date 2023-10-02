<?php include('head.php'); ?>

<body class="m8 lg:m-16">
    <div class="w-full mb-8">
        <div class="mb-4">
            <h2 class="text-lg">
                Primary Button
            </h2>
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
    <div class="w-full mb-8">
        <div class="mb-4">
            <h2 class="text-lg">
                Secondary Button
            </h2>
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
        <div class="w-full mb-8">
            <div class="mb-4">
                <h2 class="text-lg">
                    Ghost Button
                </h2>
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
</body>