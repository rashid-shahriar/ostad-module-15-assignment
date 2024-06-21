<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index($id)
    {


        // Declare your variables and assign the values stated in Question
        $name = "Donal Trump";
        $age = "75";


        //add three variables in $data variable as associative array with values stated in the question


        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];


        //Set your cookie variables stated in the question
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        $cookie = cookie(
            $cookieName,
            $cookieValue,
            $cookieMinutes,
            $cookiePath,
            $cookieDomain,
            $cookieSecure,
            $cookieHttpOnly
        );


        //add the return statement with the response method along with $data and status-code and set the cookie stated in the question.

        return response()->json($data, 200)->cookie($cookie);
    }
}