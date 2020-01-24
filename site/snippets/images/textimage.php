<picture>
    <source media="(max-width: 767px)" data-srcset="<?= $pic->thumb([
        'width'      => 432,
        'quality'    => 80,
    ])->url() ?>">
    <source media="(min-width: 768px)" data-srcset="<?= $pic->thumb([
        'width'      => 720,
        'quality'    => 80,
    ])->url() ?>">
    <img data-src="<?= $pic->thumb([
        'width'      => 720,
        'quality'    => 80,
    ])->url() ?>" class="lazyload block w-full" <?php e(isset($alt), 'alt="'. $alt . '"', ''); ?> >
</picture>
