<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger Banner :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="制作実績の紹介ページです。">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/commons.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Poppins:wght@400;500&family=Ubuntu&display=swap');
    </style>
    <!-- php -->
    <?php
    $path = '../'; // ファイルパスの変数
    ?>

</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>
    <section class="work_details">
        <div class="banner_mockup">
            <img src="../work/images/banner-ham03-80-64acd7632d333.webp" alt="バナーの写真">
        </div>
        <div class="text">
            <div class="title">
                <h1>Banner Design</h1>
                <p>ハンバーガーのバナー</p>
            </div>
            <div class="details">
                <table>
                    <tr>
                        <th class="name">制作人数</th>
                        <td class="value">個人</td>
                    </tr>
                    <tr>
                        <th class="name">担当</th>
                        <td class="value">Design</td>
                    </tr>
                    <tr>
                        <th class="name">ツール</th>
                        <td class="value">Illustrator / Photoshop</td>
                    </tr>
                    <tr>
                        <th class="name">制作期間</th>
                        <td class="value">1週間</td>
                    </tr>
                </table>
            </div>
            <div class="desc">
                <h2>デザインについて</h2>
                <p>
                    ハンバーガーのWEB広告用バナーをデザインし制作しました。20代の男性をターゲットに、休日のランチや夕食にハンバーガーを食べることを想定しました。高級感を第一に、シンプルなデザインを目指しました。そのために、背景に黒い光沢のあるグラデーションを適用し、ハンバーガーにスポットライトが当たっているような加工をしました。文字は、明朝体にし、文字間隔や各要素の余白を大きくとりまいした。
                </p>
            </div>
        </div>
        <!-- <div class="whole_pic">
            <img src="../work/images/whole-salon-64acd84d55638.webp" alt="美容室のサイトの全体写真">
        </div> -->
        <div class="btn_block">
            <a href="../work/index.php" class="btn">WORK一覧へ戻る</a>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="footer_bg">
            <a href="#header" class="footer_left">
                <div class="arrow"></div>
                <p>page top</p>
            </a>
            <div class="footer_right">
                <ul class="footer_nav">
                    <li><a href="../index.html">TOP</a></li>
                    <li><a href="../work/index.html">WORK</a></li>
                    <li><a href="../about/index.html">ABOUT</a></li>
                    <li><a href="../contact/index.html">CONTACT</a></li>
                </ul>
                <!-- © 最初の発行年 著作権者の氏名 -->
                <p>&copy; 2023 Sawako Sugimori</p>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script>
        $(function () {
            // hamburger menu
            $('.ham_btn').on('click', function () {
                if ($('.sp_nav').hasClass('null')) {
                    $('.sp_nav').removeClass('null');
                    $('.sp_nav').animate({ 'bottom': '0' }).addClass('active');
                }
            });
            $('.close_btn').on('click', function () {
                $('.sp_nav').animate({ 'bottom': '-450px' });
                $('.sp_nav').removeClass('active');
                $('.sp_nav').addClass('null');
            });
            // Show background when scrolling
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll > 100) {
                    $(".global_nav").addClass('scroll-nav');
                }
                else {
                    $(".global_nav").removeClass('scroll-nav');
                }
            });
        });
    </script>
</body>

</html>