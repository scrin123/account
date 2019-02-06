<?php
use app\controllers\PacksController;
use app\models\Resource;
use app\models\Packs;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Calculate;
?>
<? $form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'needs-validation',

    ],
]) ?>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Название пака</th>
                <th>Кол-во Граны</th>
                <th>Кол-во Олд виндом</th>
                <th>Кол-во Трента</th>
                <th>Кол-во Эферии</th>
                <th>Кол-во Кальф</th>
                <th>Действие</th>
            </tr>

    </div>
<div class="col-sm">
    <h1><?= $name->name ?></h1>
    <div>
        <?
        foreach ($packs as $key => $value): ?>
            <tr>
                <td><?= $value['name'] ?></td>
                <td><?= $form->field($quantityform, 'quntity_grana')->textInput(['value'=>$value["quntity_grana"]])->label(false)?></td>
                <td><?= $form->field($quantityform, 'quntity_old_wind')->textInput(['value'=>$value["quntity_old_wind"]])->label(false)?></td>
                <td><?= $form->field($quantityform, 'quntity_trent')->textInput(['value'=>$value["quntity_trent"]])->label(false)?></td>
                <td><?= $form->field($quantityform, 'quntity_epheria')->textInput(['value'=>$value["quntity_epheria"]])->label(false)?></td>
                <td><?= $form->field($quantityform, 'quntity_calf')->textInput(['value'=>$value["quntity_calf"]])->label(false)?></td>
                <td><?= Html::submitButton('Обновить', ['class' => 'btn btn-primary']) ?></td>
            </tr>
        <? endforeach; ?>
        </thead>
        </table>
        <?php ActiveForm::end() ?>
    </div>
</div>