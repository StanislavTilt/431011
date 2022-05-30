<?php

namespace App\Contracts\Services;

/**
 * Interface AuthServiceInterface
 * @package App\Contracts\Services
 */
interface AuthServiceInterface
{
    /**
     * @param string $key
     * @return mixed
     */
    public function validateKey(string $key);
}
