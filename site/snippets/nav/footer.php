
<nav aria-label="Secondary Menu" class="gutter">
    <ul id="footer-menu" class=" flex flex-row flex-wrap items-center text-white uppercase tracking-wider text-base leading-none">
    <?php $daten = $pages->find('datenschutz'); ?>
        <li class=" pr-4 mr-4 border-r-2 border-solid">
            <a class="<?php e($daten->isOpen(), ' is-active ') ?> hover:text-grey-light" href="<?= $daten->url() ?>"><?= $daten->title() ?></a>
        </li>
        <li class=" pr-4 mr-4 border-r-2 border-solid">
            <a class=" hover__c-grey-light" href="<?= $site->url() ?>/panel">Login</a>
        </li>
    <?php $impressum = $pages->find('impressum'); ?>
        <li class="">
            <a class="<?php e($impressum->isOpen(), ' is-active ') ?> hover:text-grey-light" href="<?= $impressum->url() ?>"><?= $impressum->title() ?></a>
        </li>

    </ul>
</nav>
