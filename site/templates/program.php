<?php snippet('header'); ?>

<article class="container gutter mb-24">
    <div class="bg-white shadow-md ">

        <div class="flex flex-row flex-wrap items-stretch card_border">

            <?php snippet('carditems/header', [
                'level' => '1',
                'url' => false,
                'classes' => ' w-full lg:w-2/3 lg:border-b-0 ',
                'title' => $page->title()
            ]); ?>

            <div class="p-3 w-full lg:w-1/3 lg:border-l border-solid border-gray-200 flex flex-row flex-wrap items-center">
                <?php snippet('share'); ?>
            </div>
        </div>

        <div class="flex flex-row flex-wrap">

            <div class="w-full lg:w-2/3">

                <?php if($page->coverimage()->isNotEmpty()): ?>
                    <?php snippet('carditems/largeimage', ['image' => $page->coverimage()->toFile(), 'alt' => $page->title()]); ?>
                <?php endif; ?>

                <?php snippet('carditems/text', ['text' => $page->body()->kt(), 'large' => true]); ?>

            </div>

            <div class="w-full lg:w-1/3 lg:border-l border-solid border-gray-200">

                <?php snippet('carditems/listitem', [
                    'icon'  => 'child',
                    'label' => t('ages'),
                    'value' => $page->tourAgesDisplay() . ' ' . t('years')
                    ]) ?>

                <?php snippet('carditems/listitem', [
                    'icon'  => 'clock',
                    'label' => t('duration'),
                    'value' => $page->duration()
                    ]) ?>

            <?php if($page->programType() == 'children' && $page->childrenprice()->isNotEmpty() && $page->adultprice()->isNotEmpty() ): ?>

                <?php snippet('carditems/listitem', [
                    'icon'  => 'euro',
                    'label' => 'Τιμή:',
                    'value' => 'Παιδιά: ' . $page->childrenprice() . ' ευρώ | Γονείς: ' . $page->adultprice() . ' ευρώ'
                    ]) ?>

            <?php elseif ( $page->adultprice()->isNotEmpty() ) : ?>

                <?php snippet('carditems/listitem', [
                    'icon'  => 'euro',
                    'label' => 'Τιμή:',
                    'value' => $page->adultprice() . ' ευρώ'
                    ]) ?>

            <?php endif; ?>

            <?php if ( $page->entranceticket()->isNotEmpty() ) : ?>

            <div class="border-b border-gray-200 border-solid">
                <div class="p-3 flex flex-row items-center text-gray-600">
                    <?php snippet('icons/ticket'); ?>
                    <div class="pl-3">
                        <div class="label"><?=  t('ticket') ?></div>
                        <div class="text-gray-800"><?= $page->entranceticket()  ?> ευρώ</div>
                    </div>
                </div>

                <?php if($page->priceinfo()->isNotEmpty()): ?>
                    <div class="p-3 text-gray-600">
                        <?= $page->priceinfo()->kt(); ?>
                    </div>
                <?php endif; ?>

            </div>

            <?php endif; ?>

            <?php snippet('carditems/listitem', [
                'icon'  => 'location',
                'label' => 'Τοποθεσία:',
                'value' => $page->location()
                ]) ?>


            <?php if( $page->hasFutureTours() ): ?>

                <div class="card_border">

                    <div class="p-3 flex flex-row items-center text-gray-600">

                        <?php snippet('icons/calendar'); ?>

                        <div class="pl-3 w-full">

                            <div class="label">Ημερομηνίες:</div>

                            <?php foreach ($page->futureTours() as $tour) : ?>

                                <?php if ( $tour->acceptsBookings() && $tour->statusColor() == 'green'): ?>

                                    <div class="text-gray-800 flex flex-row flex-wrap items-center justify-between w-full pb-2">
                                        <span class="pr-2"><?= $tour->midDate(); ?></span>
                                        <a class="button button_border" href="<?= url($tour->url() . '/bookingform') ?>" title="Κάντε κράτηση">Κάντε κράτηση</a>
                                    </div>
 
                                <?php elseif ($tour->acceptsBookings() && $tour->statusColor() == 'yellow'): ?>

                                    <div class="text-gray-800 flex flex-row flex-wrap items-center justify-between w-full pb-2">
                                        <span class="pr-2"><?= $tour->midDate(); ?></span>
                                        <a class="button button_border" href="<?= url($tour->url() . '/bookingform') ?>" title="Κάντε κράτηση">Κάντε κράτηση</a>
                                    </div>

                                <?php elseif ($tour->acceptsBookings() && $tour->statusColor() == 'red'): ?>
                                    <div class="text-gray-800 flex flex-row flex-wrap items-center justify-between w-full pb-2">
                                        <span class="pr-2"><?= $tour->midDate(); ?></span>
                                        <a class="button button_border_danger" href="<?= url($tour->url() . '/bookingform') ?>" title="Λίστα αναμονής">Λίστα αναμονής</a>
                                    </div>

                                <?php elseif ( $tour->isCancelled()): ?>
                                    <div class="text-gray-800 flex flex-row flex-wrap items-center justify-between w-full pb-2">
                                        <span class="pr-2"><?= $tour->midDate(); ?></span>
                                        <span>Ακυρώθηκε</span>
                                    </div>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>


            </div>

        </div>

    </div>
</article>

<?php snippet('sidebar'); ?>

<?php snippet('footer'); ?>
