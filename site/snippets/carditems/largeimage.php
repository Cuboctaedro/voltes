<?php
if(!isset($alt)) {
    $alt = '';
}
?>

<div class="card_border">
    <picture>
        <source media="(max-width: 767px)" data-srcset="<?= $image->thumb([
            'crop'    => true,
            'width'   => 456,
            'height'  => 282,
            'quality' => 80
        ])->url() ?>">
        <source media="(min-width: 768px)" data-srcset="<?= $image->thumb([
            'crop'    => true,
            'width'   => 840,
            'height'  => 520,
            'quality' => 80
        ])->url() ?>">
        <img data-src="<?= $image->thumb([
            'crop'    => true,
            'width'   => 840,
            'height'  => 520,
            'quality' => 80
        ])->url() ?>" alt="<?= $alt ?>" class="w-full block lazyload">
    </picture>
</div>
