<?php if($page->message()->exists() && $page->message()->isNotEmpty()): ?>
    <div class="container gutter my-24 ">
        <div class="mx-auto w-full lg:w-2/3 xl:w-1/2 bg-red-200 text-black p-3 sm:p-6 border border-solid border-red-700 generated">
            <?= $page->message()->kt() ?>
        </div>
    </div>
<?php endif; ?>
