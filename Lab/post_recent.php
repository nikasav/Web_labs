<div class="post_recent">
    <img class="post__img post__img_recent" src="<?= $post['image'] ?>" alt="<?= $post['image_alt'] ?>">
    <div class="post__content post__content_recent">
        <a class="post__link" title="<?= $post['title'] ?>" href="/post?id=<?= $post['id'] ?>">
            <h5 class="post__title post__title_recent"><?= $post['title'] ?></h5>
        </a>
        <p class="post__subtitle post__subtitle_recent"><?= $post['subtitle'] ?></p>
    </div>
    <div class="post__description post__description_recent">
        <div class="post__author author">
            <img class="author__img" src="<?= $post['author_image'] ?>" alt="<?= $post['author_name'] ?>">
            <span class="author__name font_black"><?= $post['author_name'] ?></span>
        </div>
        <p class="post__date font_black"><?= $post['date'] ?></p>
    </div>
</div>