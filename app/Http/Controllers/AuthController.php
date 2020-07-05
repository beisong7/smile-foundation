<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function authenticate(Request $request){
        $access = $request->input('access');
        $secret = $request->input('secret');

        if(is_numeric($access)){
            if (Auth::attempt(['tel' => $access, 'password' => $secret])) {
                if(intval(Auth::user()->who) ===4){
                    return redirect(route('dashboard'));
                }else{
                    Auth::logout();
                    return redirect(route('admin.login'))->withErrors(array('message'=>'Invalid Credentials Given'));
                }
            } else {
                return redirect(route('admin.login'))->withErrors(array('message' => 'Invalid Credentials Given'));
            }
        }
        else{
            if(Auth::attempt(['email' => $access, 'password'=> $secret])){
                if(intval(Auth::user()->who) === 4){
                    return redirect(route('dashboard'));
                } else{
                    Auth::logout();
                    return redirect(route('admin.login'))->withErrors(array('message'=>'Invalid Credentials Given'));
                }
            }else{
                return redirect(route('admin.login'))->withErrors(array('message'=>'Invalid Credentials Given'))->withInput($request->input());
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
