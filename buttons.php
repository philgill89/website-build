<?php include('head.php');?>

<body class="m8 lg:m-16 flex-wrap gap-8">
    <?php includeWithVariables('elements/button.php', array('text' => 'Click Here', 'style' => 'button--primary')); ?>
    <?php includeWithVariables('elements/button.php', array('text' => 'Click Here', 'style' => 'button--secondary', 'icon' => 'caret-circle-right' )); ?>
    <?php includeWithVariables('elements/button.php', array('style' => 'button--secondary', 'icon' => 'caret-circle-right' )); ?>
</body>