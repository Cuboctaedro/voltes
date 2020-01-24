<nav class="languages gutter relative" aria-label="Language Switch">
    <button aria-expanded="false" data-toggle-menu="#lang-menu" class="<?php e(!$page->isHomePage(), ' text-white ', ' text-brand ') ?> flex flex-row items-center">
        <span class="pr-2 uppercase tracking-wider"><?= $kirby->language()->code() ?></span>
        <?php snippet('icons/down') ?>
    </button>
    <div hidden id="lang-menu" class="absolute gutter w-64 z-8" style="right:0;">
        <ul class="shadow-2xl bg-white text-brand">
            <?php foreach($kirby->languages() as $language): ?>
            <li class="<?php e($kirby->language() == $language, ' is-active ') ?>" >
                <a href="<?= $page->url($language->code()) ?> " hreflang="<?= $language->code() ?>" class="block p-2 text-center bg-white hover:bg-grey-light">
                    <?= html($language->name()) ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>

    </div>
</nav>
