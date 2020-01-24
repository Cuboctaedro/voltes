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


<?php snippet('footer'); ?>
