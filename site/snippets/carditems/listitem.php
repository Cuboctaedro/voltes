<?php $iconpath = 'icons/' . $icon ; ?>


<div class="border-b border-gray-200 border-solid">
    <div class="p-3 flex flex-row items-center text-gray-600">
        <?php snippet($iconpath); ?>
        <div class="pl-3">
            <div class="label"><?= $label ?></div>
            <div class="text-gray-800"><?= $value ?></div>
        </div>
    </div>
</div>
