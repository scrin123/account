<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<? $form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'needs-validation',

    ],
]) ?>
<div class="row">
    <div class="col">
        <?= $form->field($packsform, 'namepacks')->label('Имя пака') ?>
    </div><Br>
    <div class="col">
        <?= $form->field($packsform, 'grana')->label('Цена пака Грана') ?>
        <small  class="form-text text-muted">Указать цены для города на artisan2</small>
    </div>
    <div class="col">
        <?= $form->field($packsform, 'old_windom')->label('Цена пака Олд виндом') ?>
        <small  class="form-text text-muted">Указать цены для города на artisan2</small>
    </div>
    <div class="col">
        <?= $form->field($packsform, 'trent')->label('Цена пака Трент') ?>
        <small  class="form-text text-muted">Указать цены для города на artisan2</small>
    </div>
    <div class="col">
        <?= $form->field($packsform, 'epheria')->label('Цена пака Эферия') ?>
        <small  class="form-text text-muted">Указать цены для города на artisan2</small>
    </div>
    <div class="col">
        <?= $form->field($packsform, 'calf')->label('Цена пака Калфьеон')?>
        <small class="form-text text-muted">Указать цены для города на artisan2</small>
    </div>

</div>

<?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end() ?>

