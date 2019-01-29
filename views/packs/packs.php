<?

use app\controllers\PacksController;
use app\models\Resource;
use app\models\Packs;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Calculate;
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
                    Граны:<? if (Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->grana,$users->leveloftrade),$price) <= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?= Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->grana,$users->leveloftrade),$price)?>
                    <? endif; ?></p>
                <p>С Old
                    windom<? if (Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->old_wind,$users->leveloftrade),$price) <= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?=Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->old_wind,$users->leveloftrade),$price)?>
                    <? endif; ?></p>
                <p>С
                    Трента:<? if (Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->trent,$users->leveloftrade),$price)<= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?= Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->trent,$users->leveloftrade),$price)?>
                    <? endif; ?></p>
                <p>С
                    Эферия:<? if (Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->epheria,$users->leveloftrade),$price) <= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?= Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->epheria,$users->leveloftrade),$price)?>
                    <? endif; ?></p>
                <p>С
                    Кальфеон:<? if (Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->calf,$users->leveloftrade),$price) <= 0): ?>НЕ ВЫГОДНО<?
                    else: ?>-Выгодно:Прибыль=<?= Calculate::calculateProfit(Calculate::calculatePriceByLvlTrade($name->calf,$users->leveloftrade),$price)?>
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

    </div>
</div>

