<?php snippet('header'); ?>


<section class="mb-12">
    <ul class="flex flex-row flex-wrap container">
        <?php foreach($page->children()->sortBy('date', 'desc') as $post): ?>
            <li class="w-full md:w-1/2 xl:w-1/3 gutter pb-8">
                <article class="card card_hover">
                    <?php if($post->coverimage()->isNotEmpty()): ?>
                        <?php snippet('carditems/image', ['image' => $post->coverimage()->toFile(), 'alt' => $post->title() ]); ?>
                    <?php endif; ?>

                    <?php snippet('carditems/header', [
                        'level' => '2',
                        'url' => $post->url(),
                        'title' => $post->title()
                    ]); ?>

                    <div class="p-3 flex flex-row items-center card_border">
                        <span class="font-titles uppercase tracking-wider text-gray-600"><?= $post->longDate(); ?></span>
                    </div>

                    <?php snippet('carditems/text', ['text' => $post->body()->excerpt(100)]); ?>

                </article>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php snippet('sidebar'); ?>

<?php snippet('footer'); ?>
