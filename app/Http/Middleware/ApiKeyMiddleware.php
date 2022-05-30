<?php

namespace App\Http\Middleware;

use App\Contracts\Services\AuthServiceInterface;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class ApiKeyMiddleware
{
    protected AuthServiceInterface $authService;

    public function __construct(AuthServiceInterface $service)
    {
        $this->authService = $service;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$this->authService->validateKey($request->header('Authorization')))
        {
            throw new AuthenticationException(
                'Invalid api key.'
            );
        }
        return $next($request);
    }
}
