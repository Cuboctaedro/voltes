<?php
/*
 * Required variables:
 *
 * $form_name (the form as defined in the controller)
 * $field_name (field name)
 * $field_label (the field label)
 * $options (array of options)
 *
 * Optional variables
 *
 * $attributes (extra attributes like 'required' or 'disabled')
 * $field_info (extra text below the label)
 *
 */
?>

<label class="w-full label" for="<?= $field_name ?>"><?= $field_label ?></label>
<?php if ( isset($field_info) ) : ?>
<div class="w-full text-sm mb-3 text-gray-700"><?= $field_info ?></div>
<?php endif; ?>

<select
    name="<?= $field_name ?>"
    id="<?= $field_name ?>"
    class="w-full py-1 px-2 border border-solid <?php e($form_name->error($field_name), ' border-red-400 ', 'border-gray-200'); ?> bg-white focus:border-gray-400"
>
<?php foreach($options as $option): ?>
    <option
        value="<?= $option['val'] ?>"<?php e($option['val'] == $form_name->old($field_name) , ' selected'); ?>
    >
        <?= $option['label'] ?>
    </option>
<?php endforeach; ?>
</select>
<?php if ($form_name->error($field_name)): ?>
    <p class="text-red-700 text-sm text-right w-full"><?= implode('<br>', $form_name->error($field_name)) ?></p>
<?php endif; ?>
