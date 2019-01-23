<?

use app\controllers\MainController;
use app\models\Resource;
use app\models\Packs;

?>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1><?= $packs->name ?></h1>
            <div>

                <? $price = 0;
                foreach ($packs->resource as $key => $value): ?>
                    <h5><?=$value->name ?> Колличество-<?= $value->quantity ?> Цена ресурса на 1 пак=
                        <? $price = $price + Packs::calculatePrice($value->quantity, $value->price) ?> <?= $value->quantity * $value->price ?>
                    </h5>
                <? endforeach; ?>

                <h3>Общаяя цена пака:<?= $price ?></h3>
            </div>
        </div>
        <div class="col-sm">
            <div>
                <h2>Выгода:</h2>
                <p>С Граны:<? if(($packs->grana- $price)<=0):?>НЕ ВЫГОДНО<? endif;?></p>
                <p>С Old windom<? if(($packs->old_wind- $price)<=0):?>НЕ ВЫГОДНО<? endif;?></p>
                <p>С Трента:<? if(($packs->trent- $price)<=0):?>НЕ ВЫГОДНО<? endif;?></p>
            </div>
        </div>
    </div>
</div>

