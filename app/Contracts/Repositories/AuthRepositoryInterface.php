<?php

namespace App\Contracts\Repositories;

/**
 * Interface AuthRepositoryInterface
 * @package App\Contracts\Repositories
 */
interface AuthRepositoryInterface
{
    /**
     * @param string $key
     * @return mixed
     */
    public function validateKey(string $key);
}
