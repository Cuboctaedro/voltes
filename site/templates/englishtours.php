<?php snippet('header'); ?>

<article class="container gutter">
    <div class="pagecard">

        <?php snippet('carditems/header', [
            'level' => '1',
            'url' => false,
            'classes' => ' ',
            'title' => $page->title()
        ]); ?>

        <?php snippet('carditems/text', ['text' => $page->body()->kt(), 'large' => true]); ?>

    </div>
</article>

<ul class="flex flex-row flex-wrap container">
    <?php foreach($page->children() as $item): ?>
        <li class="w-full md:w-1/2 xl:w-1/3 gutter pb-8">
            <article class="card ">

                <?php snippet('carditems/header', [
                    'level' => '2',
                    'url' => false,
                    'title' => $item->title()
                ]); ?>

                <?php if($item->coverimage()->isNotEmpty()): ?>
                    <?php snippet('carditems/image', ['image' => $item->coverimage()->toFile(), 'alt' => $item->title()]); ?>
                <?php endif; ?>

                <?php snippet('carditems/text', ['text' => $item->body()->kt()]); ?>

                <div class="p-3 flex flex-row items-center">
                    <a href="mailto:info@voltes.city?Subject=Website%20request%20<?= $item->title() ?>" class="font-titles uppercase tracking-wider text-brand-500">Request Availability</a>
                </div>

            </article>
        </li>
    <?php endforeach; ?>
</ul>


<?php snippet('footer'); ?>
