<?php

use Iconic\SearchEngine\Boolean;

/**
 * Created by PhpStorm.
 * User: DKASTANI
 * Date: 5/9/2018
 * Time: 2:10 μμ
 */

class HasPhotos extends Boolean
{
    public function __construct()
    {
        $this->fieldName = 'has_photos';
    }
}