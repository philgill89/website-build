<?php include('head.php');?>

<body>
    <div class="bg-black p-8 h-48 w-full text-white">
        <span>test</span>
    </div>

    <?php includeWithVariables('elements/button.php', array('text' => 'Click Here', 'style' => 'button--primary')); ?>
</body>