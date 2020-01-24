<?php
/*
 * Required variables:
 *
 * $form (the form as defined in the controller)
 * $name (field name)
 * $label (the field label)
 *
 * Optiona variables
 *
 * $type (input type, defaults to 'text')
 * $attributes (extra attributes like 'required' or 'disabled')
 *
 */

$attributes = isset($attributes) ? $attributes : ' ';

?>

<fieldset>
    <legend class="label"><?= $field_label ?></legend>
    <?php if ( isset($field_info) ) : ?>
    <div class="w-full text-sm mb-3 text-gray-700"><?= $field_info ?></div>
    <?php endif; ?>

    <?php foreach($options as $option): ?>
        <label class="field__label flex flex-row items-center relative w-full h-10 pr-2 cursor-pointer <?php e($form_name->error($field_name), ' has-error ', ''); ?>" for="<?= $field_name?>">
            <input
                class="mr-3 block"
                type="checkbox"
                name="<?= $field_name?>"
                id="<?= $field_name ?>"
                value="<?= $option['val'] ?>"
                <?php e($option['val'] == $form_name->old($field_name) , ' checked')?>
            /> <?= $option['label'] ?>
        </label>
    <?php endforeach; ?>
</fieldset>
<?php if ($form_name->error($field_name)): ?>
    <p class="text-red-700 text-sm w-full"><?= implode('<br>', $form_name->error($field_name)) ?></p>
<?php endif; ?>
