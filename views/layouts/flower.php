<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\FlowerAsset;


FlowerAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>



<main id="main"  role="main">

        <?= $content ?>

</main>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
