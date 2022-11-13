<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class UserController extends BaseController
{

    // make middleware available in front controller
    // you can except specific function
    public function __construct(){
        $this->middleware('auth')->except('getString0');
    }
    // using in admin routes
    public function getUserName()
    {
        return 'Ali Gamal';
    }
    public function getAdminName()
    {
        return ' Gamal';
    }
    public function getString0()
    {
        return 'string ';
    }
    public function getString1()
    {
        return 'string   string';
    }
    public function getString2()
    {
        return 'string string string';
    }
}
