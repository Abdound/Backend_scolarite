<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();

      
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JwtAuth\Exceptions\TokenInvalidException) {
                return response()->json(['status' => 'Token is invalid'], status: 403);
            } else
            if ($e instanceof \Tymon\JwtAuth\Exceptions\TokenExpiredException) {
                return response()->json(['status' => 'Token is Expired']);
            } else {
                return response()->json(['status' => 'Authorization token not found']);
            }
        }
        return $next($request);
    }
}
