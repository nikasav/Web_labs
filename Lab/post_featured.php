<div class="post">
    <img class="post__img" src="<?= $post['image_src'] ?>" alt="<?= $post['image_alt'] ?>">
    <div class="post__content">
        <?php if ($post['is_adventure'] == 1) : ?>
            <p class="article__Adventure">Adventure</p>
        <?php endif; ?>
        <a class="post__link" title="<?= $post['title'] ?>" href="/post?id=<?= $post['id'] ?>">
            <p class="post__title"><?= $post['title'] ?></p>
        </a>
        <p class="post__subtitle"><?= $post['subtitle'] ?></p>
        <div class="post__description">
            <div class="post__author author">
                <img class="author__img" src="<?= $post['author_image'] ?>">
                <span class="author__name"><?= $post['author_name'] ?></span>
            </div>
            <span class="post__date font_white"><?=  date("F j, Y", $post['public_date']) ?></span>
        </div>
    </div>
</div>