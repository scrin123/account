<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div><br><br><br></div>
<div class="wrap">
<?php
                NavBar::begin([
                            'options' => [
                            'class' => 'navbar-inverse navbar-fixed-top',
            ],
            'brandLabel' => 'Главная страница',
            'brandUrl' => Yii::$app->homeUrl,
]);         
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-left'], 
                'items' => [
                    ['label' => 'Внести суммы', 'url' => ['/main/summa']],
                    ['label' => 'Календарь по выплатам', 'url' => ['/main/index']],
                    ['label' => 'Добавить компанию', 'url' => ['/main/calculate']],
                    
                ],
            ]);     
            NavBar::end();
?>
</div>

        <div class="container">
        <?= $content   ;
       // echo Yii::$app->homeUrl;
        ?>

        </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
