</main>

<footer class="flex-none bg-brand-200 " id="contact" >
    <?php if ($page->intendedTemplate() != 'contact' && $page->intendedTemplate() != 'bookingform' && $page->intendedTemplate() != 'info') : ?>
    <div class="container gutter flex flex-row flex-wrap pt-16">
        <div class="mx-auto w-full md:w-1/2 mb-12">
            <h2 class="heading-footer mb-6">Γραφτείτε στο Newsletter</h2>
            <?php snippet('forms/newsletter'); ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="bg-brand-600 h-12 w-full flex flex-row flex-wrap items-center">
        <div class="px-2 sm:px-6 text-white font-titles ">
            Copyright (c) 2016-2018 All rights reserved
        </div>
        <?php
         if ($site->footermenu()->exists() && $site->footermenu()->isNotEmpty() ) {
            $footermenu = $site->footermenu()->toPages(); 
        } else {
            $footermenu = [];
            $footermenu[] = $pages->find('politikh-aporrhtoy');
            $footermenu[] = $pages->find('oroi-xrhshs-and-cookies');
            $footermenu[] = $pages->find('copyright');
            $footermenu[] = $pages->find('pws-doyleyoyme');
        } 
        ?>
        <nav class="px-2 sm:px-6">
            <ul class="flex flex-row flex-wrap items-center">
                <?php foreach ($footermenu as $footeritem) : ?>
                <li class="pr-6">
                    <a class="text-white hover:text-brand-200 font-titles uppercase tracking-wide" href="<?= $footeritem->url() ?>"><?= $footeritem->title() ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</footer>

</div>

<?= mix('/app.js') ?>
</body>
</html>
