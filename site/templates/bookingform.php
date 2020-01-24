<?php snippet('header'); ?>

<article class="container gutter">
    <div class="bg-white shadow-md mb-12 w-full lg:w-2/3 mx-auto">
    
    <?php if ( ! $bookingform->success() ) : ?>

        <?php snippet('forms/booking', ['bookingform' => $bookingform]); ?>
        
    <?php else : ?>
    
        <div class="p-3 md:p-6 generated">

            <?php
            $successpage = $pages->find('success');
            if ( $bookingstatus == 'error' ) {
                echo 'Η κράτηση σε αυτή την ξενάγηση δεν είναι δυνατή.';
            }
            elseif ( $bookingstatus == 'waiting') {
                echo $successpage->waiting()->kt();
            } else {
                echo $successpage->body()->kt();
            }
            ?>
            <a class="" href="<?= $page->parent()->parent()->url() ?>">Επιστροφή στις ξεναγήσεις</a>

        </div>

    <?php endif; ?>

    </div>
</article>

<?php snippet('sidebar'); ?>

<?php snippet('footer'); ?>
