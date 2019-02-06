<?php
use app\models\helpers\Calculate;
?>
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
                <td><a href="index.php?r=packs%2Fpacks&type=<?=$value->packs_id ?>" style="font-size: 16px"><?= $value->name ?></a></td>
                <td><?= Calculate::calculatePriceByLvlTrade($value->grana,$users->leveloftrade) ?> </td>
                <td><?= Calculate::calculatePriceByLvlTrade($value->old_wind,$users->leveloftrade) ?> </td>
                <td><?= Calculate::calculatePriceByLvlTrade($value->trent,$users->leveloftrade) ?> </td>
                <td><?= Calculate::calculatePriceByLvlTrade($value->epheria,$users->leveloftrade) ?> </td>
                <td><?= Calculate::calculatePriceByLvlTrade($value->calf,$users->leveloftrade) ?> </td>
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
