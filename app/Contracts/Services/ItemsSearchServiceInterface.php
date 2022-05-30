<?php

namespace App\Contracts\Services;

/**
 * Interface ItemsSearchServiceInterface
 * @package App\Contracts\Services
 */
interface ItemsSearchServiceInterface
{
    /**
     * @param array $validateData
     * @return mixed
     */
    public function search(array $validateData);
}
