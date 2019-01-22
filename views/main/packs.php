<div>

    <h1><?=$packs->name ?></h1>
<? foreach ( $packs->resource as $key => $value): ?>
    <h5><?= $value->name?> Колличество-<?= $value->quantity?> Цена ресурса на 1 пак=<?=$value->quantity*$value->price?></h5>
<? endforeach;?>
    <h3>Общаяя цена пака:</h3>
</div>