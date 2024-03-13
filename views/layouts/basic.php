<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\BasicAsset;
BasicAsset::register($this);

$this->registerCsrfMetaTags();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>
    <header id="header">
        <div class="container header">
            <a class="logo" href="#"><img src="../images/logo.svg" alt=""></a>
            <nav>
                <a href="/basic/">Home</a>
                <a href="/basic/features">Features</a>
                <a href="/basic/about-us">About</a>
                <a href="/basic/why">Why</a>
                <a href="/basic/team">Team</a>
                <a href="/basic/blog">Blog</a>
            </nav>
            <a class="btn" href="#">Free Trial</a>
        </div>
    </header>
<main id="main"  role="main">
    <?= $content ?>

</main>
    <footer>
        <div class="container">
            <div class="footer_main">
                <div class="footer_item">
                    <img src="../images/logo.svg" alt="logo">
                    <span>Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</span>
                    <div class="links">
                        <a href="#"><i class="lni-facebook-filled"></i></a>
                        <a href="#"><i class="lni-twitter-filled"></i></a>
                        <a href="#"><i class="lni-instagram-filled"></i></a>
                        <a href="#"><i class="lni-linkedin-filled"></i></a>
                    </div>
                </div>
                <div class="footer_item">
                    <h1>Quick Link</h1>
                    <a href="#">Road Map</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Refund Policy</a>
                    <a href="#">Teams of Service</a>
                    <a href="#">Pricing</a>
                </div>
                <div class="footer_item">
                    <h1>Resources</h1>
                    <a href="#">Home</a>
                    <a href="#">Page</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact</a>
                </div>
                <div class="footer_item">
                    <h1>Contact Us</h1>
                    <span>+809272561823</span>
                    <span>info@gmail.com</span>
                    <span>www.yourweb.com</span>
                    <span>123 Street New Your City, United States Of America 750</span>
                </div>
            </div>
            <div class="copyright">
                Basic.com © 2023
            </div>
        </div>
        <img class="footer_bg" src="../images/footer-bg.svg" alt="footer_bg">
    </footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
