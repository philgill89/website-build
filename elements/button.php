<button class="button<?php if(isset($style)){echo ' ' . $style;} ?>"  type="button">
    <?php if(isset($text)){ ?>
        <span class="<?php if(isset($icon)){echo 'mr-2';} ?>"><?php if(isset($text)){echo $text;} ?></span>
    <?php } ?>
    <?php if(isset($icon)){include('icons/' . $icon . '.php');} ?>
</button>

