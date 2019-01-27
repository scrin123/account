<?

use app\controllers\PacksController;
use app\models\Resource;
use app\models\Packs;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1><?= $name->name ?></h1>
            <div>
                <? $price = 0;
                foreach ($packs as $key => $value): ?>
                    <h5><?= $value['name'] ?> Колличество-<?= $value['quantity'] ?> Цена ресурса на 1 пак=
                        <? $price = $price + Packs::calculatePrice($value['quantity'], $value['price']) ?>
                        <? if ($value['price'] >= 3000): ?>
                            <? $priceres = $value['price']; ?>
                            <?= $value['price'] * $value['quantity'] ?>
                        <? else: ?>
                            <?= $value['price'] * $value['quantity'] ?>
                        <? endif ?>
                    </h5>
                <? endforeach; ?>

                <h3>Общаяя цена пака:<?= $price ?></h3>
            </div>
        </div>
        <div class="col-sm">
            <div>
                <h2>Выгода:</h2>
                <p>С
                    Граны:<? if (((($name->grana * ($users->leveloftrade + 8) * 0.00397) + $name->grana) - $price) <= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?= (($name->grana * ($users->leveloftrade + 8) * 0.00397) + $name->grana) - $price ?>
                    <? endif; ?></p>
                <p>С Old
                    windom<? if ((($name->old_wind * ($users->leveloftrade + 8) * 0.00397) + $name->old_wind) - $price <= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?= (($name->old_wind * ($users->leveloftrade + 8) * 0.00397) + $name->old_wind) - $price ?>
                    <? endif; ?></p>
                <p>С
                    Трента:<? if ((($name->trent * ($users->leveloftrade + 8) * 0.00397) + $name->trent) - $price <= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?= (($name->trent * ($users->leveloftrade + 8) * 0.00397) + $name->trent) - $price ?>
                    <? endif; ?></p>
                <p>С
                    Эферия:<? if ((($name->epheria * ($users->leveloftrade + 8) * 0.00397) + $name->epheria) - $price <= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?= (($name->epheria * ($users->leveloftrade + 8) * 0.00397) + $name->epheria) - $price ?>
                    <? endif; ?></p>
                <p>С
                    Кальфеон:<? if ((($name->calf * ($users->leveloftrade + 8) * 0.00397) + $name->calf) - $price <= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?= (($name->calf * ($users->leveloftrade + 8) * 0.00397) + $name->calf) - $price ?>
                    <? endif; ?></p>
            </div>
        </div>
    </div>
    <div>
        <? $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-inline',
                'placeholder' => $name->name
            ],
        ]) ?>
        <?= $form->field($packsform, 'packs')->label('Имя ресурса(Слитка или фанеры)') ?>
        <?= $form->field($packsform, 'price')->label('Цена') ?>

        <?= Html::submitButton('Обновить', ['class' => 'btn btn-primary']) ?><br>

        <?php ActiveForm::end() ?>

        <!--        <form class="form-inline">-->
        <!--            <label class="sr-only" for="inlineFormInputName2">Имя ресурса</label>-->
        <!--            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="-->
        <? //= $name->name ?><!--">-->
        <!---->
        <!--            <label class="sr-only" for="inlineFormInputGroupUsername2">Цена ресурса</label>-->
        <!--            <div class="input-group mb-2 mr-sm-2">-->
        <!--                <div class="input-group-prepend">-->
        <!--                </div>-->
        <!--                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="-->
        <? //=$priceres?><!--">-->
        <!--            </div>-->
        <!--            <button type="button" class="btn btn-primary mb-2 reprice">Пересчитать</button>-->
        <!--        </form>-->
    </div>
</div>

