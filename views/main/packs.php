<?

use app\controllers\PacksController;
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
                        <? $price = $price + Packs::calculatePrice($value->quantity, $value->price) ?> <? if ($value->price>=3000):?><?$priceres=$value->price;?> <?=$value->price*$value->quantity?> <?endif  ?>
                    </h5>
                <? endforeach; ?>

                <h3>Общаяя цена пака:<?= $price ?></h3>
            </div>
        </div>
        <div class="col-sm">
            <div>
                <h2>Выгода:</h2>
                <p>С Граны:<? if(($packs->grana- $price)<=0):?>НЕ ВЫГОДНО<?else:?>Выгодно:Прибыль=<?=$packs->grana- $price?><? endif;?></p>
                <p>С Old windom<? if(($packs->old_wind- $price)<=0):?>НЕ ВЫГОДНО<? endif;?></p>
                <p>С Трента:<? if(($packs->trent- $price)<=0):?>НЕ ВЫГОДНО<? endif;?></p>
            </div>
        </div>
    </div>
    <div>
        <form class="form-inline">
            <label class="sr-only" for="inlineFormInputName2">Имя ресурса</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="<?= $packs->name ?>">

            <label class="sr-only" for="inlineFormInputGroupUsername2">Цена ресурса</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="<?=$priceres?>">
            </div>
            <button type="button" class="btn btn-primary mb-2 reprice">Пересчитать</button>
        </form>
    </div>
</div>

