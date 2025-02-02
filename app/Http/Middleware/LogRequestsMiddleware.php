<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequestsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('🟢 Middleware LogRequestsMiddleware eseguito correttamente.');

        Log::info('Richieste', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'parameters' => $request->all(),
            'ip' => $request->ip(),
            'user_agent' => $request->header('User-Agent')
        ]);

        return $next($request);
    }
}
