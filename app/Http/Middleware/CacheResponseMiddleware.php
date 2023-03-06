<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheResponseMiddleware
{
    /** 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        Cache::flush();
        if (Cache::has($request->path())) {

            return response(Cache::get($request->path()));
        }

        return $next($request);
    }
    /**
     * Handle tasks after the response has been sent to the browser.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function terminate($request, $response)
    {
        if (Cache::has($request->path())) {

            return;
        }
        Cache::put($request->path(), $response->getContent(), Carbon::now()->addDay());
    }
}
