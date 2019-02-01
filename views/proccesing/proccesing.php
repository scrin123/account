<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Calculate;
?>

<div>

    <? $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-inline'
        ],
    ]) ?>
    <?= $form->field($proccesing, 'nameRes')->label('Имя ресурса') ?>
    <?= $form->field($proccesing, 'price')->label('Цена ресурса')->textInput(['value'=>$price]) ?>
    <?= $form->field($proccesing, 'quantity')->label('Кол-во')->textInput(['value'=>$quntity]) ?>
    <?= Html::submitButton('Посчитать', ['class' => 'btn btn-primary']) ?><br>
    <?php ActiveForm::end() ?>
</div>
<?if(Calculate::calculateProcessing($quntity)*2750 <$price*$quntity): ?>
<h3>Не выгодно</h3>
<?else:?>
<h3>Выгодно</h3>
<? endif;?>

