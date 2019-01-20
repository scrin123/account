<div>
    <table class="table">
        <thead>
        <tr>
            <th>Название пака</th>
            <th>Цена Граны</th>
            <th>Цена Олд виндом</th>
            <th>Цена Трента</th>
            <th>Цена Эферии </th>
            <th>Цена Кальф</th>
        </tr>


<?foreach ($packs as $key=>$value):?>
<tr>
    <td><b style="font-size: 16px"><?=$value->name?></b> </td>
    <td><?=$value->grana?> </td>
    <td><?=$value->old_wind?> </td>
    <td><?=$value->trent?> </td>
    <td><?=$value->epheria?> </td>
    <td><?=$value->calf?> </td>
    </tr>

<? endforeach; ?>

        </thead>
</table>
</div>