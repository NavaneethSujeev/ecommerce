<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
Use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
      return  view('admin.dashboard');
    }
    public function adminloginview(){
      return  view('admin.loginview');
    }
    public function dologin(request $request){

       $Name           = $request->get('name');
       $Password       = $request->get('password');

       $checkdetails   = admin::where('Name',$Name)->where('Password',$Password)->get();
       if(count($checkdetails) > 0){

        return redirect()->route('admindashboard');

       }else{

        return redirect()->route('adminlogin')->with('Failed','Invalid Username or Password !');;

       }
    }
}
