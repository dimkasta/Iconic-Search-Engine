<?php
/**
 * Created by PhpStorm.
 * User: DKASTANI
 * Date: 5/9/2018
 * Time: 10:46 πμ
 */

namespace IconicSearchService;

use Iconic\SearchEngine\SearchService;

class Test
{
    private $search;



    public function __construct()
    {
        $this->search = new \ClassifiedSearchEngine();
    }

    public function test()
    {
        $this->search->classified->brand->in([1,3,4]);
        $this->search->classified->model->equals(2);
        $this->search->classified->price->lte(123);
        $this->search->classified->price->gte(321);
        $this->search->classified->hasPhotos->isTrue();
//        $this->search->index->classified->vendor->like('motoland');
//        $this->search->index->classified->sorting->by($this->search->index->classified->brand);
//        $this->search->index->classified->select('title, price', 4, 12);
//        $this->search->index->classified->getStatistics();
    }

}