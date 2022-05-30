<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\ItemsSearchServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\SearchItemsRequest;
use Illuminate\Http\Request;

/**
 * Class ItemsController
 * @package App\Http\Controllers\Api
 */
class ItemsController extends Controller
{
    protected ItemsSearchServiceInterface $service;

    /**
     * ItemsController constructor.
     * @param ItemsSearchServiceInterface $service
     */
    public function __construct(ItemsSearchServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * @param SearchItemsRequest $request
     * @return mixed
     */
    public function search(SearchItemsRequest $request)
    {
        return $this->service->search($request->validated());
    }
}
