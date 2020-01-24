<article class="h-full bg-white shadow-md hover:shadow-xl relative">
    <?php if($item->coverimage()->isNotEmpty()): ?>
    <div class="">
        <?php snippet('carditems/image', ['image' => $item->coverimage()->toFile(), 'alt' => $item->title() ]); ?>
    </div>
    <?php endif; ?>
    <?php snippet('carditems/header', [
        'level' => '2',
        'url' => $item->url(),
        'title' => $item->title()
    ]); ?>
    <?php snippet('carditems/text', ['text' => $item->body()->excerpt(100)]); ?>

</article>
