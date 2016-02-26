<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 01/09/15
 * Time: 23:40
 */

namespace CodeProject\OAuth;

use Auth;

class Verifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email' => $username,
            'password' => $password,
        ];
        if(Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }

}