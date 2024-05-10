<?php namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin_MainController extends Controller
{
    public function __construct(){
    $this->middleware('auth',['only'=>['admin_main']]);
    // $this->middleware('auth',['except'=>['test']]);
    }
    public function admin_main()
    {
        return view('admin.dashboard');
    }
} 