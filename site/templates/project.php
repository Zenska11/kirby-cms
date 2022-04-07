<?php snippet('header') ?>

<main class="main">

    <article>
        <h1><?= $page->title() ?></h1>
        <div class="project-layout">

            <div class="project-info">
                <?php if ($page->text()->isNotEmpty()) : ?>
                    <div class="project-text">
                        <?= $page->text() ?>
                    </div>
                <?php endif ?>

                <dl>
                    <?php if ($page->client()->isNotEmpty()) : ?>
                        <dt>Client</dt>
                        <dd><?= $page->client() ?></dd>
                    <?php endif ?>

                    <?php if ($page->category()->isNotEmpty()) : ?>
                        <dt>Category</dt>
                        <dd><?= $page->category() ?></dd>
                    <?php endif ?>

                    <?php if ($page->link()->isNotEmpty()) : ?>
                        <dt>Link</dt>
                        <dd><?= $page->link() ?></dd>
                    <?php endif ?>
                </dl>
            </div>
            <div class="project-gallery">

                <ul>
                    <?php foreach ($page->images() as $image) : ?>
                        <li>
                            <a href="<?= $image->url() ?>">
                                <?= $image->resize(1200, 1200)  ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>



    </article>
</main>

<?php snippet('footer') ?>