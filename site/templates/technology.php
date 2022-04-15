<?php snippet('header') ?>

<main class="main">

    <article>
        <h1><?= $page->title() ?></h1>
        <div class="technology-layout">

            <div class="technology-info">
                <?php if ($page->text()->isNotEmpty()) : ?>
                    <div class="technology-text">
                        <?= $page->text() ?>
                    </div>
                <?php endif ?>

                <dl>
                    <?php if ($page->year()->isNotEmpty()) : ?>
                        <dt>Release</dt>
                        <dd><?= $page->year() ?></dd>
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
            <div class="technology-gallery">

                <ul>
                    <?php foreach ($page->icon()->toFiles() as $image) : ?>
                        <li>
                            <figure>
                                <img src="<?= $image->resize(1200, 1200)->url()  ?>" alt="<?= $image->alt() ?>">
                                <figcaption>
                                    <?= $image->caption() ?>
                                </figcaption>
                            </figure>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>



    </article>
</main>

<?php snippet('footer') ?>