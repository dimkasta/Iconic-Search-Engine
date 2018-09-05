<?php

use Iconic\SearchEngine\Number;

/**
 * Created by PhpStorm.
 * User: DKASTANI
 * Date: 5/9/2018
 * Time: 11:47 πμ
 */

class Price extends Number
{
    public function __construct()
    {
        $this->fieldName = 'price';
    }
}