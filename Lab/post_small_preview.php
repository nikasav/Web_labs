<div class="post post_small">
    <img class="post__img post__img_small" src="<?= $post['image'] ?>">
    <div class="post__content post__content_small">
        <a href="#" style="text-decoration: none;"><h5 class="post__title post__title_small"><?= $post['title'] ?></h5></a>
        <p class="post__subtitle post__subtitle_small"><?= $post['subtitle'] ?></p>
    </div>
    <div class="post__description post__description_small">
        <div class="post__author_small author">
            <img class="author__img" src="<?= $post['image_author'] ?>">
            <span class="author__name font_black"><?= $post['author'] ?></span>
        </div>
        <p class="post__date_small date font_black"><?= $post['date'] ?></p>
    </div>
</div>