<?php

namespace App\Contracts\Repositories;

/**
 * Interface ItemsSearchRepositoryInterface
 * @package App\Contracts\Repositories
 */
interface ItemsSearchRepositoryInterface
{
    /**
     * @param array $searchData
     * @param array $sort
     * @param integer $categoryId
     * @return mixed
     */
    public function search(array $searchData, array $sort, $categoryId = null);
}
