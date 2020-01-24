<?php snippet('header'); ?>

<article class="container gutter">
    <div class="bg-white shadow-md mb-12 w-full lg:w-2/3 mx-auto">

        <?php snippet('carditems/header', [
            'level' => '1',
            'url' => false,
            'classes' => ' w-full ',
            'title' => $page->title()
        ]); ?>

        <?php if($page->coverimage()->isNotEmpty()): ?>
            <?php snippet('carditems/largeimage', ['image' => $page->coverimage()->toFile(), 'alt' => $page->title()]); ?>
        <?php endif; ?>

        <?php snippet('carditems/text', ['text' => $page->body()->kt(), 'large' => true]); ?>

        <div class="p-3 flex flex-row items-center card_border">
            <a href="<?= $page->download()->toFile()->url()?>" class="button button_solid" target="_blank"><?= $page->buttontext() ?></a>
        </div>

        <div class="p-3 w-full card_border flex flex-row flex-wrap items-center">
            <?php snippet('share'); ?>
        </div>

    </div>
</article>


<?php snippet('footer'); ?>
