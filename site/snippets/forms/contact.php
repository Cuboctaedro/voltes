<?php if ($contactform->success()): ?>
    <div class="p-6 text-green-800 bg-green-100">
        <p>Ευχαριστούμε για το μήνυμα σας.</p>
    </div>
<?php else: ?>

<form action="<?= $page->url()?>" method="POST" id="contactform">

    <div class="mb-6">
        <?php snippet('forms/fields/input', [
            'field_name' => 'name',
            'field_type' => 'text',
            'form_name' => $contactform,
            'field_label' => 'Όνομα',
        ]);?>
    </div>

    <div class="mb-6">
        <?php snippet('forms/fields/input', [
            'field_name' => 'lastname',
            'field_type' => 'text',
            'form_name' => $contactform,
            'field_label' => 'Επίθετο',
        ]);?>
    </div>

    <div class="mb-6">
        <?php snippet('forms/fields/input', [
            'field_name' => 'email',
            'field_type' => 'email',
            'form_name' => $contactform,
            'field_label' => 'Email',
        ]);?>
    </div>

    <div class="mb-6">
        <?php snippet('forms/fields/textarea', [
            'field_name' => 'message',
            'form_name' => $contactform,
            'field_label' => 'Μήνυμα',
            'field_options' => ' rows="5" '
        ]);?>
    </div>

    <?= csrf_field(); ?>
    <?= honeypot_field(); ?>
    <input type="hidden" name="formtitle" value="contactform">

    <div class="mb-12">
        <input
            type="submit"
            value="Υποβολή"
            class="g-recaptcha button button_border inline-block cursor-pointer"
            data-sitekey="<?= option('voltes.recaptcha'); ?>" 
            data-callback='onSubmit'
        >
    </div>
</form>

<?php endif; ?>
