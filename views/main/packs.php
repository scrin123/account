<div>

    <h1><?=$packs->name ?></h1>
<? foreach ( $packs->resource as $key => $value): ?>
    <h2><?= $value->name?> Колличество-<?= $value->quantity?></h2>
<? endforeach;?>
</div>