<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function login(){
        // return view('admin.login');
    }

    public function index(){
        return view('admin.dashboards.home');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function manageUser(){
        return view('admin.dashboards.manageUser');
    }

    public function managePurchaseHistory(){
        return view("admin.dashboards.managePurchaseHistory");
    }

    public function manageBootcamp(){
        return view("admin.dashboards.manageBootcamp");
    }
}
