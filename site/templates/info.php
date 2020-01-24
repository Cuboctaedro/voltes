<?php snippet('header'); ?>

<article class="container gutter mb-24">
    <div class="bg-white shadow-md ">

        <?php $tourpage = $page->parent()->parent(); ?>

        <header class="p-3 md:p-6 border-b border-gray-200 border-solid">
            <h1 class="heading-1"><?= $tourpage->title() ?> - Πληροφορίες Ξενάγησης</h1>
            <div class="text-lg text-gray-700"><?= $tourpage->location(); ?></div>
        </header>

        <div class="w-full flex flex-row flex-wrap">
            <div class="w-full md:w-1/2 md:border-r border-solid border-gray-200">

                <section class="p-3 md:p-6 border-b border-solid border-gray-200">
                    <h2 class="heading-4 mb-2">Πώς να φτάσετε</h2>
                    <div>
                        <?= $tourpage->howtoget()->kt() ?>
                    </div>
                    <a class="font-titles uppercase tracking-wider text-sm px-6 py-2 bg-brand-500 text-white hover:bg-brand-600 shadow-lg hover:shadow-xl cursor-pointer hover:text-white my-3 inline-block" href="<?= $tourpage->map() ?>" target="_blank" title="Χάρτης - <?= $tourpage->location(); ?>">Δείτε το χάρτη</a>
                </section>

                <section class="p-3 md:p-6 border-b border-solid border-gray-200">
                    <h2 class="heading-4 mb-2">Συνάντηση</h2>
                        <div class="">
                            <span class="">Ημερομηνία: </span>
                            <span class=""><?= $page->parent()->longDate() ?></span>
                        </div>
                    <div>
                        <?= $tourpage->meetingpoint()->kt() ?>
                    </div>
                </section>
                <section class="p-3 md:p-6 border-b border-solid border-gray-200">
                    <h2 class="heading-4 mb-2">Εισιτήριο Εισόδου</h2>
                    <div>
                        <?= $tourpage->entranceticket() ?> ευρώ
                    </div>
                    <div>
                        <?= $tourpage->priceinfo()->kt() ?>
                    </div>
                    <div>
                        <?= $tourpage->pricetext()->kt() ?>
                    </div>
                </section>
                <section  class="p-3 md:p-6 border-b border-solid border-gray-200">
                    <h2 class="heading-4 mb-2">Άλλες πληροφορίες</h2>
                    <div>
                        <?= $tourpage->locationinfo()->kt() ?>
                    </div>
                </section>

            </div>
            <div class="w-full md:w-1/2 ">
                <?php if( $tourpage->meetingimage()->isNotEmpty()): ?>
                    <figure>
                        <picture>
                            <source media="(max-width: 767px)" data-srcset="<?= $tourpage->meetingimage()->toFile()->thumb([
                                'crop'    => true,
                                'width'   => 456,
                                'height'  => 282,
                                'quality' => 80
                            ])->url() ?>">
                            <source media="(min-width: 768px)" data-srcset="<?= $tourpage->meetingimage()->toFile()->thumb([
                                'crop'    => true,
                                'width'   => 840,
                                'height'  => 520,
                                'quality' => 80
                            ])->url() ?>">
                            <img data-src="<?= $tourpage->meetingimage()->toFile()->thumb([
                                'crop'    => true,
                                'width'   => 840,
                                'height'  => 520,
                                'quality' => 80
                            ])->url() ?>" alt="<?= $tourpage->location(); ?>" class="w-full block lazyload">
                        </picture>
                        <figcaption class="p-3 italic">
                            <?= $tourpage->meetingimage()->toFile()->caption() ?>
                        </figcaption>
                    </figure>
                <?php endif; ?>

            </div>

        </div>
    </div>
</article>

<?php snippet('footer'); ?>
