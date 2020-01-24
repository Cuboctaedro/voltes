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

        <div class="p-3  md:p-6 mb-12">
            <?php snippet('forms/contact'); ?>
        </div>

    </div>
</article>


<?php snippet('footer'); ?>
