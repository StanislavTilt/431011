<?php

namespace App\Repositories;

use App\Contracts\Repositories\ItemsSearchRepositoryInterface;
use App\Models\Item;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class ItemsSearchRepository
 * @package App\Repositories
 */
class ItemsSearchRepository implements ItemsSearchRepositoryInterface
{
    /**
     * @param array $searchData
     * @param array $sort
     * @param null $categoryId
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public function search(array $searchData, array $sort, $categoryId = null)
    {
        $query = Item::with('categories');

        foreach ($searchData as $key => $value)
        {
            if(is_string($value))
            {
                $query = $query->where($key, 'like', '%'.$value.'%');
            }
            else{
                $query = $query->where($key, $value);
            }
        }

        foreach ($sort as $key => $value)
        {

            $query = $query->orderBy($key, $value);
        }


        if(isset($categoryId))
        {
            $query = $query->whereHas('categories', function(Builder $query) use ($categoryId) {
                $query->where('categories.id', $categoryId);
            });
        }

        return $query->get();
    }
}
