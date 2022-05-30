<?php

namespace App\Services;

use App\Contracts\Repositories\AuthRepositoryInterface;
use App\Contracts\Services\AuthServiceInterface;
use Illuminate\Support\Facades\Hash;

/**
 * Class AuthService
 * @package App\Services
 */
class AuthService implements AuthServiceInterface
{
    protected AuthRepositoryInterface $repository;

    /**
     * AuthService constructor.
     * @param AuthRepositoryInterface $repository
     */
    public function __construct(AuthRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function validateKey(string $key)
    {
        return $this->repository->validateKey($key);
    }
}
