<?php
$posts = [
    [
        'title' => 'The Road Ahead',
        'subtitle' => '',
        'image' => './img/post_img/Mat Vogels.png',
        'author' => '',
    ],
    [
        'title' => 'The Road Ahead',
        'subtitle' => '',
        'img_modifier' => '',
        'author' => '',
    ],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/lab2/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap"
        rel="stylesheet">
    <title>Lab_2</title>
</head>

<body>
    <header class="header">
        <div class="header__content container">
            <a class="header__logo">Escape.</a>
            <ul class="header__menu">
                <li><a class="header__menu-link font_white" href="#">Home</a></li>
                <li><a class="header__menu-link font_white" href="#">Category</a></li>
                <li><a class="header__menu-link font_white" href="#">About</a></li>
                <li><a class="header__menu-link font_white" href="#">Contact</a></li>
            </ul>
        </div>
        <div class="header__title-content container">
            <h1 class="header__title">Let's do it together.</h1>
            <p class="header__subtitle">We travel the world in search of stories. Come along for the ride.</p>
            <a class="header__link" href="#"> View Latest Posts </a>
        </div>
    </header>
    <nav class="menu container">
        <a href="#" class="menu__link">Nature</a>
        <a href="#" class="menu__link">Photography</a>
        <a href="#" class="menu__link">Relaxation</a>
        <a href="#" class="menu__link">Vacation</a>
        <a href="#" class="menu__link">Travel</a>
        <a href="#" class="menu__link">Adventure</a>
    </nav>

    <main class="main">
        <div class="posts-block posts-block_first-posts container">
            <h2 class="posts__title">Featured Posts</h2>
            <div class="posts__content">
                <?php
                foreach ($posts as $post) {
                    include 'post_preview.php';
                }
                ?>
                <div class="post">
                    <img class="post__img" src="./img/post_img/img1.jpg">
                    <div class="post__content">
                        <h4 class="post__title">The Road Ahead</h4>
                        <p class="post__subtitle">The road ahead might be paved - it might not be.</p>
                        <div class="post__description">
                            <div class="post__author author">
                                <img class="author__img" src="./img/post_img/Mat Vogels.png">
                                <span class="author__name font_white">Mat Vogels</span>
                            </div>
                            <span class="post__date date font_white">September 25, 2015</span>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <img class="post__img" src="./img/post_img/img2.jpg">
                    <div class="post__content">
                        <a href="#" class="article__link_Adventure">Adventure</a>
                        <h4 class="post__title">From Top Down</h4>
                        <p class="post__subtitle">Once a year, go someplace you’ve never been before.</p>
                        <div class="post__description">
                            <div class="post__author author">
                                <img class="author__img" src="./img/post_img/William Wong.png">
                                <span class="author__name font_white">William Wong</span>
                            </div>
                            <p class="post__date date font_white">September 25, 2015</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="posts-block posts-block_last-posts container">
            <h4 class="posts__title">Most Recent</h4>
            <div class="posts__content">
                <div class="post post_small">
                    <img class="post__img post__img_small" src="./img/post_img/balloons.jpg" alt="balloons">
                    <div class="post__content post__content_small">
                        <h5 class="post__title post__title_small">Still Standing Tall</h5>
                        <p class="post__subtitle post__subtitle_small">Life begins at the end of your comfort zone.</p>
                    </div>
                    <div class="post__description">
                        <div class="post__author author">
                            <img class="author__img" src="./img/post_img/William Wong.png" alt="illiam Wong">
                            <span class="author__name">William Wong</span>
                        </div>
                        <p class="post__date date">9/25/2015</p>
                    </div>
                </div>
                <div class="post__article">
                    <img class="article__img" src="./img/post_img/bridge.jpg" alt="bridge">
                    <div class="article__content">
                        <h5 class="article__title">Sunny Side Up</h5>
                        <p class="article__subtitle">No place is ever as bad as they tell you it’s going to be.</p>
                    </div>
                    <div class="article__author">
                        <div class="author__info">
                            <img class="author__img" src="./img/post_img/Mat Vogels.png" alt="Mat Vogels">
                            <p class="author__name">Mat Vogels</p>
                        </div>
                        <p class="article__date">9/25/2015</p>
                    </div>
                </div>
                <div class="post__article">
                    <img class="article__img" src="./img/post_img/lake.jpg" alt="lake">
                    <div class="article__content">
                        <h5 class="article__title">Water Falls</h5>
                        <p class="article__subtitle">We travel not to escape life, but for life not to escape us.</p>
                    </div>
                    <div class="article__author">
                        <div class="author__info">
                            <img class="author__img" src="./img/post_img/Mat Vogels.png" alt="Mat Vogels">
                            <p class="author__name">Mat Vogels</p>
                        </div>
                        <p class="article__date">9/25/2015</p>
                    </div>
                </div>
                <div class="post__article">
                    <img class="article__img" src="./img/post_img/sea.jpg" alt="ballseaoons">
                    <div class="article__content">
                        <h5 class="article__title">Through the Mist</h5>
                        <p class="article__subtitle">Travel makes you see what a tiny place you occupy in the world.</p>
                    </div>
                    <div class="article__author">
                        <div class="author__info">
                            <img class="author__img" src="./img/post_img/William Wong.png" alt="illiam Wong">
                            <p class="author__name">William Wong</p>
                        </div>
                        <p class="article__date">9/25/2015</p>
                    </div>
                </div>
                <div class="post__article">
                    <img class="article__img" src="./img/post_img/fog.jpg" alt="fog">
                    <div class="article__content">
                        <h5 class="article__title">Awaken Early</h5>
                        <p class="article__subtitle">Not all those who wander are lost.</p>
                    </div>
                    <div class="article__author">
                        <div class="author__info">
                            <img class="author__img" src="./img/post_img/Mat Vogels.png" alt="Mat Vogels">
                            <p class="author__name">Mat Vogels</p>
                        </div>
                        <p class="article__date">9/25/2015</p>
                    </div>
                </div>
                <div class="post__article">
                    <img class="article__img" src="./img/post_img/waterfall.jpg" alt="waterfall">
                    <div class="article__content">
                        <h5 class="article__title">Try it Always</h5>
                        <p class="article__subtitle">Not all those who wander are lost.</p>
                    </div>
                    <div class="article__author">
                        <div class="author__info">
                            <img class="author__img" src="./img/post_img/Mat Vogels.png" alt="Mat Vogels">
                            <p class="author__name">Mat Vogels</p>
                        </div>
                        <p class="article__date">9/25/2015</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__content container">
            <a class="footer__logo">Escape.</a>
            <ul class="footer__menu">
                <li><a class="footer__link" href="#">Home</a></li>
                <li><a class="footer__link" href="#">Category</a></li>
                <li><a class="footer__link" href="#">About</a></li>
                <li><a class="footer__link" href="#">Contact</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>