<div>
    <h4>Вы зашли как,<?= $users->name ?>. Данные по пакам для уровня торговки=<?=$users->leveloftrade ?></h4>
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
                <td><?= ($value->grana*($users->leveloftrade+8)*0.00397)+$value->grana ?> </td>
                <td><?= ($value->old_wind*($users->leveloftrade+8)*0.00397)+$value->old_wind ?> </td>
                <td><?= ($value->trent*($users->leveloftrade+8)*0.00397)+$value->trent ?> </td>
                <td><?= ($value->epheria*($users->leveloftrade+8)*0.00397)+$value->epheria ?> </td>
                <td><?= ($value->calf*($users->leveloftrade+8)*0.00397)+$value->calf ?> </td>
                <td><?= ($value->types->name)?></td>
            </tr>

        <? endforeach; ?>

        </thead>
    </table
</div>
<? //var_dump($users)?>
<? foreach ($users as $index=> $user):?>
  <?=$user->name?>
<? endforeach;?>
