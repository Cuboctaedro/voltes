<?php if(!isset($large)) { $large = false;} ?>

<div class="p-3 card_border text-gray-800 generated <?php e($large, ' md:p-6') ?>">
    <?= $text; ?>
</div>
