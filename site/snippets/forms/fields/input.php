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

$field_type = isset($field_type) ? $field_type : 'text';
$attributes = isset($attributes) ? $attributes : ' ';

?>

<label class="w-full label " for="<?= $field_name ?>"><?= $field_label ?></label>
<?php if ( isset($field_info) ) : ?>
<div class="w-full text-sm mb-3 text-gray-700 "><?= $field_info ?></div>
<?php endif; ?>
<input
    class="w-full py-1 px-2 border border-solid <?php e($form_name->error($field_name), ' border-red-400 ', 'border-gray-200'); ?> bg-white focus:border-gray-400"
    name="<?= $field_name ?>"
    type="<?= $field_type ?>"
    value="<?= $form_name->old($field_name) ?>"
    <?= $attributes ?>
    id="<?= $field_name ?>"
>
<?php if ($form_name->error($field_name)): ?>
    <p class="text-red-700 text-sm text-right w-full"><?= implode('<br>', $form_name->error($field_name)) ?></p>
<?php endif; ?>
