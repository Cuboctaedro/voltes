<?php snippet('header'); ?>

<header class="container gutter mb-12">
    <h1 class="heading-3"><?= $page->title()->html() ?></h1>
</header>

<div class="container flex flex-row flex-wrap">
    <?php foreach($page->reviews()->toStructure() as $review): ?>
        <div class="gutter mb-4 ">
            <?= $review->code()->value() ?>
        </div>
    <?php endforeach; ?>
</div>


<?php snippet('footer'); ?>
