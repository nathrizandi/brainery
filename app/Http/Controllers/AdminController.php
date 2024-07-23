<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;
use App\Models\Speaker;
use App\Models\Publisher;

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
        $bootcamps = Bootcamp::join("speakers", "speakers.id", "=", "bootcamps.speaker_id")->join("publishers", "publishers.id", "=", "bootcamps.publisher_id")
        ->select("bootcamps.*", "speakers.nama as speaker_name", "publishers.nama as publisher_name")->paginate(10);

        $count = count($bootcamps);

        // dd($count);
        return view("admin.dashboards.manageBootcamp", compact("bootcamps", "count"));
    }
}
