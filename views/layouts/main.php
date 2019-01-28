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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item<? if( substr(stristr($_SERVER['REQUEST_URI'],'F'),1)==='index'):?><?=' active'?><? endif;?>" data-name="index">
            <a class="nav-link" data-name="index">Рассчет паков</a>
        </li>
        <li class="nav-item" data-name="add">
            <a class="nav-link<?if( substr(stristr($_SERVER['REQUEST_URI'],'F'),1)==='add'):?><?=' active'?><? endif;?>" data-name="add" >Добавить пак</a>

        </li>
    </ul>

</div>

<?php $this->beginBody() ?>
<!--        --><?//= substr(stristr($_SERVER['REQUEST_URI'],'F'),1)  ?>
        <div class="container">
        <?= $content   ;
        ?>

        </div>
<?php $this->endBody() ?>
<script scr=""></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<?$this->registerJsFile('js/main.js');?>
<?$this->registerJsFile('js/packs.js');?>
</body>
</html>
<?php $this->endPage() ?>
