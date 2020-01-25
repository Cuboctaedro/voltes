<?php snippet('header'); ?>

<header class="hidden">
    <h1 class="heading-3"><?= $page->title()->html() ?></h1>
</header>

<ul class="flex flex-row flex-wrap container">
    <?php foreach($page->services()->toStructure() as $service): ?>
        <li class="w-full md:w-1/2 xl:w-1/3 gutter pb-8">
            <article class="card ">

                <?php if($service->coverimage()->isNotEmpty()): ?>
                    <?php snippet('carditems/image', ['image' => $service->coverimage()->toFile(), 'alt' => $service->title()]); ?>
                <?php endif; ?>

                <?php snippet('carditems/header', [
                    'level' => '2',
                    'url' => false,
                    'title' => $service->title()
                ]); ?>

                <?php snippet('carditems/text', ['text' => $service->body()->kt()]); ?>

                <?php $contact = $pages->find('contact'); ?>

                <div class="p-3 flex flex-row items-center">
                    <a href="<?= $contact->url(); ?>" class="font-titles uppercase tracking-wider text-brand-500" ><?= t('requestoffer'); ?></a>
                </div>

            </article>
        </li>
    <?php endforeach; ?>
</ul>


<?php snippet('footer'); ?>
