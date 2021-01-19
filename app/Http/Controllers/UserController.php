<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserControllerController extends Controller{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createUser (Request $request)
    {
        $user = User::create($request);
        return $user;
    }
}
