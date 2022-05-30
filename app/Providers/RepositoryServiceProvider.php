<?php

namespace App\Providers;

use App\Contracts\Repositories\AuthRepositoryInterface;
use App\Contracts\Repositories\ItemsSearchRepositoryInterface;
use App\Repositories\ItemsSearchRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /** @var array|string[] Список репозиториев для DI контейнера */
    public array $bindings = [
        AuthRepositoryInterface::class => AuthRepository::class,
        ItemsSearchRepositoryInterface::class => ItemsSearchRepository::class,
    ];
}
