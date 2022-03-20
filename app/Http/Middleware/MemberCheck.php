<?php

namespace App\Http\Middleware;

use App\Models\Course;
use App\Models\Course_member;
use Closure;
use Illuminate\Http\Request;

class MemberCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $param = $request->route()->parameters()['course'];
        $data = Course_member::where('user_id', $request->user()->id)->where('course_id', $param['id'])->first();
        if (auth()->user()->roles == 'Member') {
            if ($data == NULL) {
                return redirect('/');
            } else {
                return $next($request);
            }
        } else {
            return $next($request);
        }
    }
}
