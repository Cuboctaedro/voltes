<?php
if(!isset($level)) {
    $level = 2;
}
if(!isset($url)) {
    $url = false;
}
if(!isset($classes)) {
    $classes = '';
}
?>

<header class="p-3 card_border <?= $classes ?>">
        <h<?= $level ?> class="heading-2">
            <?php if($url != false): ?>
                <a class="card-link" href="<?= $url ?>" ><?= $title ?></a>
            <?php else: ?>
                <?= $title ?>
            <?php endif; ?>
        </h<?= $level ?>>
</header>
