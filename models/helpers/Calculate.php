<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 29.01.2019
 * Time: 19:37
 */

namespace app\models\helpers;



class Calculate
{
    public $quantity;
    static function calculatePriceByLvlTrade($price,$lvl)
    {
        return ($price * ($lvl + 8) * 0.00397) + $price;
    }
    static function calculateProfit($price,$costs)
    {
        return $price-$costs;
    }
    static function calculatePrice($count, $price)
    {
        return $price = $count * $price;
    }
    static function calculateProcessing($quantity)
    {
            return $quantity/2.5;
    }
}