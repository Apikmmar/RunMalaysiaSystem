<?php
// BCS3453 [PROJECT]-SEMESTER 2324/1
// Student ID: CB21016
// Student Name: MUHAMMAD AFIQ AMMAR BIN MURAD

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}
