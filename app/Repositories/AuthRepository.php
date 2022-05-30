<?php

namespace App\Repositories;

use App\Contracts\Repositories\AuthRepositoryInterface;
use App\Models\ApiKey;
use Illuminate\Support\Facades\Hash;

/**
 * Class AuthRepository
 * @package App\Repositories
 */
class AuthRepository implements AuthRepositoryInterface
{
    /**
     * @param string $key
     * @return mixed
     */
    public function validateKey(string $key)
    {
        return ApiKey::where('key', $key)
            ->exists();
    }
}
