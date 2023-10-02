<div class="flex flex-col">
    <label class="<?php if(isset($hidden_label)){echo 'hidden';}else{echo 'mb-2';} ?>" for="<?php if(isset($name)){echo $name;} ?>"><?php if(isset($label)){echo $label;} ?></label>
    <input id="<?php if(isset($name)){echo $name;} ?>"
           type="<?php if(isset($type)){echo $type;}else{echo 'text';} ?>"
           class="input<?php if(isset($style)){echo ' ' . $style;} ?>"
           placeholder="<?php if(isset($placeholder)){echo $placeholder;} ?>">
    <?php if(isset($error)){ ?>
        <span class="text-red-600"><?php echo $error; ?></span>
    <?php } ?>
</div>