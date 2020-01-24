<?php snippet('header'); ?>


<section class="mb-12">
    <header class="hidden">
        <h1 class="heading-3"><?= $page->title() ?></h1>
    </header>
    <ul class="flex flex-row flex-wrap container">
        <?php foreach( $page->children()->listed() as $program ): ?>
            <li class="w-full md:w-1/2 xl:w-1/3 gutter pb-8">
                <?php snippet( 'tourcard', ['program' => $program] ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php snippet('sidebar'); ?>

<?php snippet('footer'); ?>
