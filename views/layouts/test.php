
<?php

/** @var yii\web\View $this */
/** @var string $content */


?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body >




<main id="main"  role="main">
    <div class="container">
        <?= $content ?>
    </div>
</main>



</body>
</html>

