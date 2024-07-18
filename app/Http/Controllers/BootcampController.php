<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;
use App\Models\Publisher;
use App\Models\Speaker;

class BootcampController extends Controller
{
    public function bootcampMenu() {
        $bootcampMenu = Bootcamp::join("publishers", "publishers.id", "=", "bootcamps.publisher_id")
        ->select(["publishers.image as pubImage", "bootcamps.title", "bootcamps.image as bootImage"])
        ->limit(4)
        ->get();

        return view("bootcamp.menu", compact("bootcampMenu"));
    }
    public function bootcampList() {
        $bootcampList = Bootcamp::join("publishers", "publishers.id", "=", "bootcamps.publisher_id")
        ->select(["publishers.image as pubImage", "bootcamps.title", "bootcamps.image as bootImage"])
        ->get();

        return view("bootcamp.list", compact("bootcampList"));
    }
}
