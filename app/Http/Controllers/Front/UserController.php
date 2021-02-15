<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showAdminName()
    {
        return 'Beshoy wagih';
    }


    /*
    public function getIndex(){
        return view('welcome')->with('data',2);
    }
    */

    public function getIndex(){
        $data = [];
        $data['id'] = 1;
        $data['name'] = 'koko';

       // $data1 = ['id' => 'apple' , 'name' => 'book'];

        return view('welcome' ,$data  ,compact('data'));
    }



}
