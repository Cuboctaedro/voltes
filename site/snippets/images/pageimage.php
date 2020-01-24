<picture>
    <source media="(max-width: 767px)" data-srcset="<?= $pic->thumb([
        'width'      => 432,
        'quality'    => 80,
    ])->url() ?>">
    <source media="(max-width: 1023px)" data-srcset="<?= $pic->thumb([
        'width'      => 720,
        'quality'    => 80,
    ])->url() ?>">
    <source media="(max-width: 1279px)" data-srcset="<?= $pic->thumb([
        'width'      => 960,
        'quality'    => 80,
    ])->url() ?>">
    <source media="(min-width: 1280px)" data-srcset="<?= $pic->thumb([
        'width'      => 1216,
        'quality'    => 80,
    ])->url() ?>">
    <img data-src="<?= $pic->thumb([
        'width'      => 1216,
        'quality'    => 80,
    ])->url() ?>" class="lazyload block w-full" <?php e(isset($alt), 'alt="'. $alt . '"', ''); ?> >
</picture>
