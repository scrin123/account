<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div>
    <? $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-inline',
            'placeholder' => $name->name
        ],
    ]) ?>
    <?= $form->field($proc, 'nameRes')->label('Имя ресурса') ?>
    <?= $form->field($proc, 'quantity')->label('Кол-во ресурса') ?>

    <?= Html::submitButton('Посчитать', ['class' => 'btn btn-primary']) ?><br>

    <?php ActiveForm::end() ?>

</div>

