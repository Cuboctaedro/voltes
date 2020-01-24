<div class="relative z-0 pt-12 siema" >

        <?php $n = 1; ?>
        <?php foreach($page->gallery()->toFiles() as $image): ?>
            <div class="relative" style="height:0; padding-top:25%;">
            <picture class="">
                <source media="(max-width: 480px)" data-srcset="<?= $image->thumb([
                    'crop'    => true,
                    'width'   => 480,
                    'height'  => 120,
                    'quality' => 80
                ])->url() ?>">
                <source media="(max-width: 960px)" data-srcset="<?= $image->thumb([
                    'crop'    => true,
                    'width'   => 960,
                    'height'  => 240,
                    'quality' => 80
                ])->url() ?>">
                <source media="(max-width: 1200px)" data-srcset="<?= $image->thumb([
                    'crop'    => true,
                    'width'   => 1200,
                    'height'  => 300,
                    'quality' => 80
                ])->url() ?>">
                <source media="(min-width: 1201px)" data-srcset="<?= $image->thumb([
                    'crop'    => true,
                    'width'   => 1600,
                    'height'  => 400,
                    'quality' => 80
                ])->url() ?>">
                <img data-src="<?= $image->thumb([
                    'crop'    => true,
                    'width'   => 1600,
                    'height'  => 400,
                    'quality' => 80
                ])->url() ?>" class="lazyload block w-full absolute inset-0 z-0 slide<?= $n ?>" alt="Voltes Image <?= $n ?>" >
            </picture>
            </div>
            <?php $n = $n + 1; ?>
        <?php endforeach;?>

</div>
