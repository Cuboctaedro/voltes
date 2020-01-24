<?php if ($newsletterform->success()): ?>
    <div class="text-green-800 mb-12">
        <p>Σας ευχαριστούμε για την εγγραφή σας.</p>
    </div>
<?php else: ?>

<form action="<?= $page->url() ?>#newsletterform" method="POST" id="newsletterform" class="mb-12">
    <div class="mb-6">
        <?php snippet('forms/fields/input', [
            'field_name' => 'newsletter_email',
            'field_type' => 'email',
            'form_name' => $newsletterform,
            'field_label' => 'Email',
        ]);?>
    </div>
    <?= csrf_field(); ?>
    <?= honeypot_field(); ?>
    <input type="hidden" name="formtitle" value="newsletterform">

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
