<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Pre-Middleware Action

        // $headers = [
        //     'Access-Control-Allow-Origin' => '*',
        //     'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
        //     'Access-Control-Allow-Credentials' => 'true',
        //     'Access-Control-Allow-Headers' => '*'
        // ];
        // if($request->isMethod('OPTIONS')){
        //     return response()->json('ok', 200, $headers);
        // }
        // $response = $next($request);

        // if(\method_exists($response, 'header')){
        //     $response->headers->set('Access-Control-Allow-Origin' , '*');
        //     $response->headers->set('Access-Control-Allow-Methods' , 'POST, GET, OPTIONS, PUT, DELETE');
        //     $response->headers->set('Access-Control-Allow-Headers' , 'Content-Type, Accept, Authorization, X-Requested-With, Origin, Aplication');
        // }

        // // Post-Middleware Action

        // return $response;


            if ($request->isMethod('OPTIONS')) {
                $response = response('ok', 200);
            } else {
                $response = $next($request);
            }
            $response->header('Access-Control-Allow-Methods', 'HEAD, GET, POST, PUT, PATCH, DELETE');
            $response->header('Access-Control-Allow-Headers', $request->header('Access-Control-Request-Headers'));
            $response->header('Access-Control-Allow-Origin', '*');
            return $response;
    }
}
