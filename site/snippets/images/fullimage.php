<picture>
    <source media="(max-width: 360px)" data-srcset="<?= $pic->thumb([
        'crop'       => true,
        'width'      => 360,
        'height'     => 180,
        'quality'    => 80,
    ])->url() ?>">
    <source media="(max-width: 740px)" data-srcset="<?= $pic->thumb([
        'crop'       => true,
        'width'      => 740,
        'height'     => 370,
        'quality'    => 80,
    ])->url() ?>">
    <source media="(max-width: 1200px)" data-srcset="<?= $pic->thumb([
        'crop'       => true,
        'width'      => 1200,
        'height'     => 600,
        'quality'    => 80,
    ])->url() ?>">
    <source media="(min-width: 1201px)" data-srcset="<?= $pic->thumb([
        'crop'       => true,
        'width'      => 1600,
        'height'     => 800,
        'quality'    => 80,
    ])->url() ?>">
    <img data-src="<?= $pic->thumb([
        'crop'       => true,
        'width'      => 1600,
        'height'     => 800,
        'quality'    => 80,
    ])->url() ?>" class="lazyload block w-full" <?php e(isset($alt), 'alt="'. $alt . '"', ''); ?> >
</picture>
