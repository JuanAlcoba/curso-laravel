<?php

namespace App\Http\Middleware;

use Closure;
use Barryvdh\Debugbar\LaravelDebugbar;

class InjectDebugbar
{
    protected $debugbar;

    public function __construct(LaravelDebugbar $debugbar)
    {
        $this->debugbar = $debugbar;
    }

    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($this->debugbar->isEnabled() && $response->getStatusCode() < 400) {
            $content = $response->getContent();
            $debugbar = $this->debugbar->render();
            $content = str_replace('</body>', $debugbar . '</body>', $content);
            $response->setContent($content);
        }

        return $response;
    }
}
