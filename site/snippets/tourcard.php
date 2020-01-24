<article class="card card_hover">

    <?php snippet('carditems/agesheader', ['ages' => $program->tourAgesDisplay()]); ?>

    <?php if($program->coverimage()->isNotEmpty()): ?>
        <?php snippet('carditems/image', ['image' => $program->coverimage()->toFile(), 'alt' => $program->title() ]); ?>
    <?php endif; ?>

    <?php if($page->isHomePage()): ?>
        <?php snippet('carditems/header', [
            'level' => '3',
            'url' => $program->url(),
            'title' => $program->title()
        ]); ?>
    <?php else: ?>
        <?php snippet('carditems/header', [
            'level' => '2',
            'url' => $program->url(),
            'title' => $program->title()
        ]); ?>
    <?php endif; ?>

    <?php snippet('carditems/text', ['text' => $program->body()->excerpt(100)]); ?>

    <?php snippet('carditems/listitem', [
        'icon'  => 'location',
        'label' => 'Τοποθεσία:',
        'value' => $program->location()
        ]) ?>

    <?php if ($program->programType() == 'children' && $program->childrenprice()->isNotEmpty() && $program->adultprice()->isNotEmpty() ) : ?>

        <?php snippet('carditems/listitem', [
            'icon'  => 'euro',
            'label' => 'Τιμή:',
            'value' => 'Παιδιά: ' . $program->childrenprice() . ' ευρώ | Γονείς: ' . $program->adultprice() . ' ευρώ'
            ]) ?>

    <?php elseif ( $program->adultprice()->isNotEmpty() ) : ?>

        <?php snippet('carditems/listitem', [
            'icon'  => 'euro',
            'label' => 'Τιμή:',
            'value' => $program->adultprice() . ' ευρώ'
            ]) ?>

    <?php endif; ?>

    <?php if( ! $program->openTours()->isEmpty() ): ?>
            <div class="p-3 flex flex-row items-center text-gray-600">
                <?php snippet('icons/calendar'); ?>
                <div class="pl-3">
                    <div class="label">Ημερομηνίες:</div>
                    <?php foreach ($program->openTours() as $opentour) : ?>
                        <div class="text-gray-800"><?= $opentour->midDate(); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
    <?php endif; ?>


</article>
