<?php snippet('header'); ?>

<article class="container gutter">
    <div class="bg-white shadow-md mb-12 w-full lg:w-2/3 mx-auto">

        <?php snippet('carditems/header', [
            'level' => '1',
            'url' => false,
            'classes' => ' w-full ',
            'title' => $page->title()
        ]); ?>

        <div class="p-3 flex flex-row items-center card_border">
            <span class="font-titles uppercase tracking-wider text-gray-600"><?= $page->longDate(); ?></span>
        </div>

        <?php if($page->coverimage()->isNotEmpty()): ?>
            <?php snippet('carditems/largeimage', ['image' => $page->coverimage()->toFile(), 'alt' => $page->title()]); ?>
        <?php endif; ?>

        <?php snippet('carditems/text', ['text' => $page->body()->kt(), 'large' => true]); ?>

        <div class="p-3 w-full card_border flex flex-row flex-wrap items-center">
            <?php snippet('share'); ?>
        </div>

    </div>
</article>


<?php snippet('footer'); ?>
