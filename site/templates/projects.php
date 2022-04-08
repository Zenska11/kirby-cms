<?php snippet('header') ?>
<?php 
$projects = $page->children()->listed()->paginate(3);
$pagination = $projects->pagination();
?>

<main class="main">
    <h1><?= $page->title() ?></h1>


    <ul class="projects">
        <?php foreach ($projects as $project) : ?>
            <li>
                <a href="<?= $project->url() ?>">
                    <figure>

                        <?= $project->image()->crop(200, 300) ?>

                        <figcaption><?= $project->title() ?></figcaption>
                    </figure>
                </a>
            </li>
        <?php endforeach ?>
    </ul>


    <?php if ($pagination->hasPages()): ?>
    <nav class="pagination">
        <?php if ($pagination->hasPrevPage()): ?>
        <a href="<?= $pagination->prevPageUrl() ?>" arial-label="Go to previous page">&larr;</a>
        <?php else: ?>
        <span>&larr;</span>
        <?php endif ?>

        <span>Page <?= $pagination->page() ?>  of <?= $pagination->pages() ?> </span>

        <?php if ($pagination->hasNextPage()): ?>
        <a href="<?= $pagination->nextPageUrl() ?>" arial-label="Go to next page">&rarr;</a>
        <?php else: ?>
        <span>&rarr;</span>
        <?php endif ?>
    </nav>
    <?php endif ?>

</main>

<?php snippet('footer') ?>