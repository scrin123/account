<?php
            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            $this->registerCssFile('css/packs.css');
?>
<html>
    <title>

    </title>
    <body>
                <div>
                <?php $form = ActiveForm::begin([
                    'options' => [
                            'class' => 'left'
                    ],
                ]) ?>
                <?= $form->field($calculate_model, 'name'); ?>
                <?= Html::submitButton('Записать', ['class' => 'btn btn-success']) ?>
                    <?php ActiveForm::end() ?>
                </div>
    </body>

</html>
