<?php
/**
 * Created by PhpStorm.
 * User: DKASTANI
 * Date: 5/9/2018
 * Time: 2:06 μμ
 */

namespace Iconic\SearchEngine;


class Boolean extends Field
{
    public function isTrue()
    {
        $this->setQueryPart(" AND ($this->fieldName IS TRUE) ");
    }
}