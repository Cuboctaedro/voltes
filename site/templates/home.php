<?php snippet('header'); ?>

<section class="mb-12">
    <ul class="flex flex-row flex-wrap container ">
        <?php foreach($pages->find('programs')->children()->listed() as $program): ?>
            <li class="w-full md:w-1/2 xl:w-1/3 gutter pb-8">
                <?php snippet('tourcard', ['program' => $program]); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php snippet('footer'); ?>
