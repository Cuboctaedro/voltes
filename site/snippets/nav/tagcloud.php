<?php

$projects = $site->find('work');

$tags = $projects->children()->listed()->pluck('tags', ',', true);

?>

<nav class="tagcloud">
    <ul>
    <?php foreach($tags as $tag): ?>
        <li>
            <a class="" href="<?= $projects->url() ?>/tag/<?= Str::kebab($tag) ?>"><?= $tag ?></a>
        </li>
    <?php endforeach ?>
    </ul>
</nav>
