<?php

namespace App\Providers;

use App\Contracts\Services\AuthServiceInterface;
use App\Contracts\Services\ItemsSearchServiceInterface;
use App\Services\AuthService;
use App\Services\ItemsSearchService;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /** @var array|string[] Список сервисов для регистрации в DI контейнере */
    public array $bindings = [
        AuthServiceInterface::class => AuthService::class,
        ItemsSearchServiceInterface::class => ItemsSearchService::class,
    ];
}
