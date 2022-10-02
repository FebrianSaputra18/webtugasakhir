<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $inputRoles = explode('|', $role);
        $userRole = $request->user()->role;
        if (in_array($userRole, $inputRoles)) {
            switch ($userRole) {
                case 'admin':
                    return redirect('/'.$userRole);
                    break;
                case 'sales':
                    return redirect('/'.$userRole);
                    break;
                case 'supplier':
                    return redirect('/'.$userRole);
                    break;
                default:
                    return back();
            }
        }
        // return $next($request);
        return back();
    }
}
