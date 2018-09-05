<?php

use Iconic\SearchEngine\SearchService;

/**
 * Created by PhpStorm.
 * User: DKASTANI
 * Date: 5/9/2018
 * Time: 2:02 μμ
 */

class ClassifiedSearchEngine extends SearchService
{
    public $classified;

    public function __construct()
    {
        $this->classified = new ClassifiedType();
    }
}