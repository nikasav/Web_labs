<?php
$requestTime = $_SERVER['REQUEST_TIME'];
$posts_featured = [
    [
        'id' => 1,
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'is_adventure' => 0,
        'image_src' => '/static/img/post_img/img1.jpg',
        'image_alt' => 'img1',
        'author_image' => '/static/img/post_img/Mat_Vogels.png',
        'author_name' => 'Mat Vogels',
        'public_date' => 1443139200,
        'is_featured' => 1,
        'content' => '',
    ],
    [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'is_adventure' => 1,
        'image_src' => '/static/img/post_img/img2.jpg',
        'image_alt' => 'img2',
        'author_image' => '/static/img/post_img/William_Wong.png',
        'author_name' => 'William Wong',
        'public_date' => 1443139200,
        'is_featured' => 1,
        'content' => '',
    ],
];

$posts_recent = [
    [
        'id' => 3,
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'is_adventure' => 0,
        'image_src' => '/static/img/post_img/balloons.jpg',
        'image_alt' => 'balloons',
        'author_image' => '/static/img/post_img/William_Wong.png',
        'author_name' => 'William Wong',
        'public_date' => 1443139200,
        'is_featured' => 0,
        'content' => '',
    ],
    [
        'id' => 4,
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'is_adventure' => 0,
        'image_src' => '/static/img/post_img/bridge.jpg',
        'image_alt' => 'bridge',
        'author_image' => '/static/img/post_img/Mat_Vogels.png',
        'author_name' => 'Mat Vogels',
        'public_date' => 1443139200,
        'is_featured' => 0,
        'content' => '',
    ],
    [
        'id' => 5,
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'is_adventure' => 0,
        'image_src' => '/static/img/post_img/lake.jpg',
        'image_alt' => 'lake',
        'author_image' => '/static/img/post_img/Mat_Vogels.png',
        'author_name' => 'Mat Vogels',
        'public_date' => 1443139200,
        'is_featured' => 0,
        'content' => '',
    ],
    [
        'id' => 6,
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'is_adventure' => 0,
        'image_src' => '/static/img/post_img/sea.jpg',
        'image_alt' => 'sea',
        'author_image' => '/static/img/post_img/William_Wong.png',
        'author_name' => 'William Wong',
        'public_date' => 1443139200,
        'is_featured' => 0,
        'content' => '',
    ],
    [
        'id' => 7,
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'is_adventure' => 0,
        'image_src' => '/static/img/post_img/fog.jpg',
        'image_alt' => 'fog',
        'author_image' => '/static/img/post_img/Mat_Vogels.png',
        'author_name' => 'Mat Vogels',
        'public_date' => 1443139200,
        'featured' => 0,
        'content' => '',
    ],
    [
        'id' => 8,
        'title' => 'Try it Always',
        'subtitle' => 'Not all those who wander are lost.',
        'is_adventure' => 0,
        'image_src' => '/static/img/post_img/waterfall.jpg',
        'image_alt' => 'waterfall',
        'author_image' => '/static/img/post_img/Mat_Vogels.png',
        'author_name' => 'Mat Vogels',
        'public_date' => 1443139200,
        'is_featured' => 0,
        'content' => '',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/style/lab2/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap"
        rel="stylesheet">
    <title>Lab</title>
</head>

<body>
    <header class="header">
        <div class="header__content container">
            <a class="header__logo" href="/home">Escape.</a>
            <ul class="header__menu">
                <li><a class="header__menu-link font_white" href="/home">Home</a></li>
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
        <div class="posts-block container">
            <h2 class="posts__title">Featured Posts</h2>
            <div class="posts__content">
                <?php
                foreach ($posts_featured as $post) {
                    include 'post_featured.php';
                }
                ?>
            </div>
        </div>
        <div class="posts-block container">
            <h4 class="posts__title">Most Recent</h4>
            <div class="posts__content_recent">
                <?php
                foreach ($posts_recent as $post) {
                    include 'post_recent.php';
                }
                ?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__content container">
            <a class="footer__logo" href="home">Escape.</a>
            <ul class="footer__menu">
                <li><a class="footer__link" href="/home">Home</a></li>
                <li><a class="footer__link" href="#">Category</a></li>
                <li><a class="footer__link" href="#">About</a></li>
                <li><a class="footer__link" href="#">Contact</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>