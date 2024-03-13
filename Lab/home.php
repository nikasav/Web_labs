<?php
$posts = [
    [
        'title' => 'The Road Ahead',
        'link' => '',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'image' => './img/post_img/img1.jpg',
        'image_author' => './img/post_img/Mat_Vogels.png',  
        'author' => 'Mat Vogels',
        'date' => 'September 25, 2015',
    ],
    [
        'title' => 'From Top Down',
        'link' => '<a href="#" class="article__link_Adventure">Adventure</a>',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'image' => './img/post_img/img2.jpg',
        'image_author' => './img/post_img/William_Wong.png',  
        'author' => 'William Wong',
        'date' => 'September 25, 2015',
    ],
];

$posts_small= [
    [
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'image' => './img/post_img/balloons.jpg',
        'image_author' => './img/post_img/William_Wong.png',  
        'author' => 'William Wong',
        'date' => '9/25/2015',
    ],
    [
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'image' => './img/post_img/bridge.jpg',
        'image_author' => './img/post_img/Mat_Vogels.png',  
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
    ],
    [
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'image' => './img/post_img/lake.jpg',
        'image_author' => './img/post_img/Mat_Vogels.png',  
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
    ],
    [
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'image' => './img/post_img/sea.jpg',
        'image_author' => './img/post_img/William_Wong.png',  
        'author' => 'William Wong',
        'date' => '9/25/2015',
    ],
    [
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'image' => './img/post_img/fog.jpg',
        'image_author' => './img/post_img/Mat_Vogels.png',  
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
    ],
    [
        'title' => 'Try it Always',
        'subtitle' => 'Not all those who wander are lost.',
        'image' => './img/post_img/waterfall.jpg',
        'image_author' => './img/post_img/Mat_Vogels.png',  
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
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
            </div>
        </div>
        <div class="posts-block posts-block_last-posts container">
            <h4 class="posts__title">Most Recent</h4>
            <div class="posts__content">
                <?php
                    foreach ($posts_small as $post) {
                        include 'post_small_preview.php';
                    }
                ?>
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