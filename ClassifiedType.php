<?php

use Iconic\SearchEngine\SearchType;

/**
 * Created by PhpStorm.
 * User: DKASTANI
 * Date: 5/9/2018
 * Time: 11:53 πμ
 */

class ClassifiedType extends SearchType
{
    /**
     * @var Brand
     */
    public $brand;

    /**
     * @var Model
     */
    public $model;

    /**
     * @var Price
     */
    public $price;

    /**
     * @var HasPhotos
     */
    public $hasPhotos;
}