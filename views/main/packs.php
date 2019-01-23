<?

use app\controllers\MainController;
use app\models\Resource;
use app\models\Packs;

?>
<div>

    <h1><?= $packs->name ?></h1>
    <? $price = 0;
    foreach ($packs->resource as $key => $value): ?>
        <h5><?=$value->name ?> Колличество-<?= $value->quantity ?> Цена ресурса на 1 пак=
            <? $price = $price + Packs::calculatePrice($value->quantity, $value->price) ?> <?= $value->quantity * $value->price ?>
        </h5>
    <? endforeach; ?>

    <h3>Общаяя цена пака:<?= $price ?></h3>
</div>