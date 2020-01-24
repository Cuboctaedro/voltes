<?php
if(!isset($alt)) {
    $alt = '';
}
?>

<div class="card_border">
    <img data-src="<?= $image->thumb([
        'crop'    => true,
        'width'   => 420,
        'height'  => 260,
        'quality' => 80
    ])->url() ?>" class="w-full block lazyload" alt="<?= $alt ?>" />
</div>
