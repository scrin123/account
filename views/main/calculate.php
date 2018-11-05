<?php
            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            $this->registerCssFile('css/main.css');
?>
<html>
    <title>

    </title>
    <body>
                <div>
                <?php $form = ActiveForm::begin([
                    'options' => [
                            'class' => 'class1'
                    ],
                ]) ?>
                <?= $form->field($calculate_model, 'name')->textInput(['maxlength'=>2]); ?>
                <?= $form->field($calculate_model, 'much') ?>
                <?= $form->field($calculate_model, 'date') ?>
                <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
                    <?php ActiveForm::end() ?>
                </div>
    </body>

</html>
