<div class="header__container container">
    <a class="header__text link_black" href="<?= $header_footer['href_logo'] ?>">
        <?= $header_footer['title_logo'] ?>
    </a>
    <ul class="header__menu">
        <?php foreach ($header_footer['menu'] as $text): ?>
            <li>
                <a class="header__link link_black" href="/home">
                    <?= $text ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>