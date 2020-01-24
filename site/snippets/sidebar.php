<aside class="container flex flex-row flex-wrap">
    <?php
    if ( 'programs' == $page->intendedTemplate() ) {
        $sidebarleft = $site->tourlistleft()->toPage();
        $sidebarright = $site->tourlistright()->toPage();
    } elseif ( 'program' == $page->intendedTemplate() ) {
        if ( 'adults' == $page->programType()) {
            $sidebarleft = $site->toursingleadultleft()->toPage();
            $sidebarright = $site->toursingleadultright()->toPage();
   
        } else {
            $sidebarleft = $site->toursingleleft()->toPage();
            $sidebarright = $site->toursingleright()->toPage();
        }
    } elseif ( 'bookingform' == $page->intendedTemplate() ) {
        $sidebarleft = $site->tourformleft()->toPage();
        $sidebarright = $site->tourformright()->toPage();
    }  
    ?>
    <?php if ( isset($sidebarleft) && false != $sidebarleft ): ?>
    <div class="w-full lg:w-1/2 gutter mb-12">
        <h2 class="heading-3 mb-4"><?= $sidebarleft->title()->html() ?></h2>
        <div class="sidebar ">
            <?= $sidebarleft->body()->kt() ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if ( isset($sidebarright) && false != $sidebarright ) : ?>
    <div class="w-full lg:w-1/2 gutter mb-12">
        <h2 class="heading-3 mb-4"><?= $sidebarright->title()->html() ?></h2>
        <div class="sidebar ">
            <?= $sidebarright->body()->kt() ?>
        </div>
    </div>
    <?php endif; ?>

</aside>
