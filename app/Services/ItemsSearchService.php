<?php

namespace App\Services;

use App\Contracts\Repositories\ItemsSearchRepositoryInterface;
use App\Contracts\Services\ItemsSearchServiceInterface;

/**
 * Class ItemsSearchService
 * @package App\Services
 */
class ItemsSearchService implements ItemsSearchServiceInterface
{
    protected ItemsSearchRepositoryInterface $repository;

    /**
     * ItemsSearchService constructor.
     * @param ItemsSearchRepositoryInterface $repository
     */
    public function __construct(ItemsSearchRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $validatedData
     * @return mixed
     */
    public function search(array $validatedData)
    {
        $searchData = array_key_exists('search_data', $validatedData) ? $validatedData['search_data'] : [];
        $sort = array_key_exists('sort', $validatedData) ? $validatedData['sort'] : [];
        $categoryId = isset($validatedData['category_id']) ? $validatedData['category_id'] : null;

        return $this->repository->search($searchData, $sort, $categoryId);
    }
}
