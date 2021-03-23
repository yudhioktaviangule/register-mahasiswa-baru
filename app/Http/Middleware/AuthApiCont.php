<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AuthApiCont
{

    public function handle(Request $request, Closure $next)
    {
        $header = $request->header("Auth")!=NULL;
        $validation=true;
        if($header){
            $myHeader = $request->header("Auth");
            $header = preg_replace('/(Bearer )/','',$myHeader);
            $data = User::where('remember_token',$header)->first();
            if($data==NULL):
                $validation=false;
            endif;
        }else{
            $validation=false;
        }
        if($validation){
            return $next($request);
        }else{
            return response()->json(['err'=>403,'message'=>'Akses tidak diizinkan'],403);
        }
    }
}
