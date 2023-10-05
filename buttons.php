<?php include('head.php'); ?>

<body class="m-8 lg:m-16 flex flex-wrap gap-8">
<?php includeWithVariables('elements/button.php', array('text' => 'Click here', 'style' => 'button--primary')); ?>
<?php includeWithVariables('elements/button.php', array('text' => 'Click here', 'style' => 'button--primary', 'icon' => 'caret-circle-right')); ?>
</body>