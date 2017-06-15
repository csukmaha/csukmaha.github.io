<?php
namespace MAkira\Admin\Http;

use App\Http\Controllers\Controller;
use Sentinel;

abstract class AdminController extends Controller
{

    /**
     * @param $email
     *
     * @return mixed
     */
    protected function findUserByEmail($email)
    {
        $credentials = [
            'email' => $email,
        ];
        $user        = Sentinel::findByCredentials($credentials);

        return $user;
    }
}