<div>
    <table class="table">
        <thead>
        <tr>
            <th>Название пака</th>
            <th>Цена Граны</th>
            <th>Цена Олд виндом</th>
            <th>Цена Трента</th>
            <th>Цена Эферии</th>
            <th>Цена Кальф</th>
            <th>Тип пака</th>
        </tr>
        <?php /*
            @var $packs
 */
        ?>
        <? foreach ($packs as $key => $value): ?>
            <tr>
                <td><a href="index.php?r=main%2Fpacks&type=<?=$value->packs_id ?>" style="font-size: 16px"><?= $value->name ?></a></td>
                <td><?= $value->grana ?> </td>
                <td><?= $value->old_wind ?> </td>
                <td><?= $value->trent ?> </td>
                <td><?= $value->epheria ?> </td>
                <td><?= $value->calf ?> </td>
                <td><?=$value->type?></td>
            </tr>

        <? endforeach; ?>
        <? foreach ($packs as $key => $value): ?>
        <? foreach ($value as $key => $test): ?>
            <? echo $key."====".var_dump($test)."<br>"?><? echo "asdfsdf".var_dump($test)?>
        <? endforeach; ?>

        <? endforeach; ?>
        </thead>
    </table>
</div>