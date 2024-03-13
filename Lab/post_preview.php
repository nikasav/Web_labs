<div class="post">
    <img class="post__img" src="<?= $post['image'] ?>">
    <div class="post__content">
        <?= $post['link'] ?>
        <a href="#" style="text-decoration: none;"><p class="post__title"><?= $post['title'] ?></p></a>
        <p class="post__subtitle"><?= $post['subtitle'] ?></p>
        <div class="post__description">
            <div class="post__author author">
                <img class="author__img" src="<?= $post['image_author'] ?>">
                <span class="author__name"><?= $post['author'] ?></span>
            </div>
            <span class="post__date date"><?= $post['date'] ?></span>
        </div>  
    </div>
</div>
