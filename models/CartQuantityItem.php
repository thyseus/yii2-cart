<?php
/**
 * Created by PhpStorm.
 * User: franziskakoehn
 * Date: 15.09.17
 * Time: 14:33
 */

namespace yii2mod\cart\models;


trait CartQuantityItem
{
    public $quantity = 1;

    public function setQuantity($qty){
        $this->quantity = $qty;
    }

}