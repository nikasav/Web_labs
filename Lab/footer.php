<div class="footer__container container">
    <a class="footer__text" href="<?= $header_footer['href_logo'] ?>">
        <?= $header_footer['title_logo'] ?>
    </a>
    <ul class="footer__menu">
        <?php foreach ($header_footer['menu'] as $text): ?>
            <li>
                <a class="footer__link link_white" href="/home">
                    <?= $text ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>