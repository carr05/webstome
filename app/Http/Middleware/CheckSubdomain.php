<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\School;

class CheckSubdomain
{
    public function handle(Request $request, Closure $next)
    {
        $host = $request->getHost();
        $subdomain = explode('.', $host)[0];

        $school = School::where('subdomain', $subdomain)->first();

        if (!$school) {
            abort(404, 'Sekolah tidak ditemukan');
        }

        // inject school ke request
        $request->merge(['school' => $school]);

        return $next($request);
    }
}
