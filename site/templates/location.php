<?php snippet('header'); ?>

<article class="container gutter">
    <div class="bg-white shadow-md mb-12 w-full lg:w-2/3 mx-auto">

        <?php snippet('carditems/header', [
            'level' => '1',
            'url' => false,
            'title' => $page->title()
        ]); ?>


        <?php if($page->coverimage()->isNotEmpty()): ?>
            <?php snippet('carditems/largeimage', ['image' => $page->coverimage()->toFile(), 'alt' => $page->location()]); ?>
        <?php endif; ?>

        <?php snippet('carditems/text', ['text' => $page->body()->kt(), 'large' => true]); ?>

    </div>

    <aside>
        <header class="container gutter mb-12">
            <h2 class="heading-3">Σχετικά προγράμματα</h2>
        </header>

        <ul class="flex flex-row flex-wrap ">
            <?php foreach($page->programList() as $program): ?>
                <li class="w-full md:w-1/2 xl:w-1/3 gutter pb-8">
                    <article class="card">
                        <?php
                        if($program->ages()->exists() && $program->ages()->isNotEmpty()) {
                            snippet('carditems/agesheader', ['ages' => $program->ages()]);
                        }
                        if($program->image()->exists() && $program->image()->isNotEmpty()) {
                            snippet('carditems/image', ['image' => $program->image()->toFile(), 'alt' => $program->title()]);
                        }
                        snippet('carditems/header', [
                            'level' => '3',
                            'url' => false,
                            'title' => $program->title()
                        ]);
                        snippet('carditems/text', ['text' => $program->body()->kt()]);
                        ?>

                    </article>

                </li>
            <?php endforeach; ?>
        </ul>
    </aside>

</article>


<?php snippet('footer'); ?>
