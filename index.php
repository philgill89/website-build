<?php include('head.php');?>

<body>
    <?php includeWithVariables('elements/button.php', array('text' => 'Click Here', 'style' => 'button--primary')); ?>
    <?php includeWithVariables('elements/button.php', array('text' => 'Click Here', 'style' => 'button--secondary', 'icon' => 'caret-circle-right' )); ?>
    <?php includeWithVariables('elements/button.php', array('style' => 'button--secondary', 'icon' => 'caret-circle-right' )); ?>
</body>