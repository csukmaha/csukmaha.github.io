<?php

namespace MAkira\Admin\Http\Auth;

use MAkira\Admin\Http\AdminController;
use MAkira\Admin\Http\Requests\Auth\LoginRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class AuthController extends AdminController
{
    public function login()
    {
        return view('admin::auth.login');
    }

    public function logout()
    {
        Sentinel::logout(null, true);
        return redirect(route('admin::auth.login'));
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = [
            'login' => $request->get('email'),
            'password' => $request->get('password')
        ];

        try{
            if($user = Sentinel::authenticate($credentials)){
                Sentinel::login($user);
                return redirect()
                    ->intended(route('admin::dashboard'));
            }


            return redirect(route('admin::auth.login'))
                ->withErrors('Invalid Credentials');

        }
        catch(\Exception $e){

            return redirect(route('admin::auth.login'))
                ->withErrors($e->getMessage());
        }
    }

}
