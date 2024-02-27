<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Hekmatinasser\Verta\Verta;

class factor
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
        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();
        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);

            if ($v1->diffDays($v2) > 0) {
                return $next($request);
            } else {
                return redirect()->route('producer.payfactor');
            }
        } else {
            return redirect()->route('producer.payfactor');
        }
    }
}
