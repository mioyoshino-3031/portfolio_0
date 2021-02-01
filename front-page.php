<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
	<link rel="SHORTCUT ICON" href="./favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
	<link rel="manifest" href="./favicon/site.webmanifest">
	<link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="style.css">
    <title>mioyoshino</title>
    <?php wp_head(); ?>
</head>
<body class="light-mode">
<?php wp_body_open(); ?>
    <div id="loading" class="loading"></div>
        <header class="container-header">
            <nav class="nav-header">
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-home">HOME</a></h4></div>
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-about">ABOUT</a></h4></div>
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-concept">CONCEPT</a></h4></div>
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-skills">SKILLS</a></h4></div>
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-sns">SNS</a></h4></div>
            </nav>
            <input id="switch-mode" class="switch-mode" type="checkbox">
            <label for="switch-mode" id="switch-mode-button" class="switch-mode-button light-mode-button"></label>
        </header>
        <main class="container-main" role="main">
            <div id="my-home" class="parallax my-home">
                <h1>MIOYOSHINO'S PORTFOLIO</h1>
            </div>
            <div id="my-about" class="parallax my-about">
                <div class="my-about-item_1"><h3>ABOUT</h3></div>
                <div class="my-about-item_2">
                    <div class="my-about-item_2_row">写真</div>
                    <div class="my-about-item_2_row"><h3>MIO YOSHINO</h3></div>
                </div>
                <div class="my-about-item_3">
                    <div class="my-about-item_3_row"><h4>神奈川県鎌倉市生まれ。</h4></div>
                    <div class="my-about-item_3_row"><h4>建設会社経理、警察官、<span class="responsive-text"></span>データベースエンジニア、EdTechエンジニアを経験。</h4></div>
                    <div class="my-about-item_3_row"><h4>三度の飯より鎌倉が好き。</h4></div>
                    <div class="my-about-item_3_row"><h4>特に由比ヶ浜〜七里ヶ浜の海が好きです。</h4></div>
                    <div class="my-about-item_3_row"><h4>鎌倉で活躍するエンジニアを目指し勉強中です。</h4></div>
            </div>
            </div>
            <div id="my-concept" class="parallax my-concept">
                <div class="my-concept-item_1"><h3>CONCEPT</h3></div>
                <div class="my-concept-item_2"><h3>動画</h3></div>
            </div>
            <div id="my-skills" class="parallax my-skills">
                <div class="my-skills-item_1"><h3>SKILLS</h3></div>
                <div class="my-skills-item_2">
                    <div class="my-skills-item_2_row"><h3>ENGINEER</h3></div>
                    <div class="my-skills-item_2_row"><h4>HTML / CSS / JavaScript / Ruby</h4></div>
                    <div class="my-skills-item_2_row"><h4>Vue.js / Ruby on Rails</h4></div>
                    <div class="my-skills-item_2_row"><h4>SQLServer / PostgreSQL / MySQL</h4></div>
                </div>
                <div class="my-skills-item_3">
                    <div class="my-skills-item_3_row"><h3>WEBDESIGN</h3></div>
                    <div class="my-skills-item_3_row"><h4>Adobe XD / Photoshop / Illustrator</h4></div>
                    <div class="my-skills-item_3_row"><h4>Adobe Premiere Pro</h4></div>
                    <div class="my-skills-item_3_row"><h4>WordPress</h4></div>
                </div>
            </div>
            <div id="my-sns" class="parallax my-sns">
                <div class="my-sns-item_1"><h3>SNS</h3></div>
                <div class="my-sns-item_2">
                    <div class="my-sns-item_2_row"></div>
                    <div class="my-sns-item_2_row"></div>
                    <div class="my-sns-item_2_row"><a href="https://twitter.com/mioyoshino_3031" target="blank"><i class="fab fa-twitter fa-5x"></i></a></div>
                    <div class="my-sns-item_2_row"><a href="https://www.instagram.com/mioyoshino_3031/" target="blank"><i class="fab fa-instagram fa-5x"></i></a></div>
                    <div class="my-sns-item_2_row"><a href=""><i class="fab fa-youtube fa-5x"></i></a></div>
                    <div class="my-sns-item_2_row"><a href="https://github.com/mioyoshino-3031/portfolio" target="blank"><i class="fab fa-github fa-5x"></i></a></div>
                    <div class="my-sns-item_2_row"></div>
                    <div class="my-sns-item_2_row"></div>
                </div>
                <div class="my-sns-item_3">
                    <small><div class="my-sns-item_3_row"><h4>&copy;MIOYOSHINO</h4></div></small>
                </div>
            </div>
        </main>
    <!-- Javascript -->
    <script src="index.js"></script>
</body>
</html>