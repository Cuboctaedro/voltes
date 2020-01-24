<?php if (! $kirby->session()->get('booking') ) {

    go($pages->find('programs')->url());
}
?>

<?php snippet('header'); ?>

<article class="container gutter">
    <div class="bg-white shadow-md mb-12 w-full lg:w-2/3 mx-auto">

        <div class="p-3 md:p-6 generated">
            <?php
            if ( $kirby->session()->get('booking') == 'error' ) {
                echo 'Η κράτηση σε αυτή την ξενάγηση δεν είναι δυνατή.';
            }
            elseif ($kirby->session()->get('booking') == 'waiting') {
                echo $page->waiting()->kt();
            } else {
                echo $page->body()->kt();
            }
            ?>
            <a class="" href="<?= $pages->find('programs')->url() ?>">Επιστροφή στις ξεναγήσεις</a>
            </p>
        </div>


    </div>
</article>

<?php snippet('sidebar'); ?>

<?php snippet('footer'); ?>
