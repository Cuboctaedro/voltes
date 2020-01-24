<?php snippet('header'); ?>

<header class="hidden">
    <h1 class="heading-3"><?= $page->title()->html() ?></h1>
</header>

<ul class="flex flex-row flex-wrap container">
    <?php foreach($page->children()->listed() as $location): ?>
        <li class="w-full md:w-1/2 xl:w-1/3 gutter pb-8">
            <?php snippet('card', ['item' => $location]); ?>
        </li>
    <?php endforeach; ?>
</ul>


<?php snippet('footer'); ?>
