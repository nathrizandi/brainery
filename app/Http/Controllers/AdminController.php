<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\Speaker;

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

    public function manageCourse(){
        $courseData = Course::join("speakers", "speakers.id", "=", "courses.speaker_id")
        ->select([
            "courses.*",
            "courses.id as cId",
            "courses.image as cImage",
            "speakers.*",
            "speakers.id as sId",
            "speakers.image as sImage"
        ])
        ->paginate(10);

        $courseDetailData = CourseMaterial::join("course_material_details", "course_material_details.courseMaterial_id", "=", "course_materials.id")
        ->select([
            "course_materials.*",
            "course_materials.id as cmId",
            "course_materials.title as cmTitle",
            "course_material_details.*",
            "course_material_details.id as cmdId",
            "course_material_details.title as cmdTitle",
            "course_material_details.video as cmdVideo",
            "course_material_details.description as cmdDesc",
        ])
        ->get();

        $speakerData = Speaker::all();

        $count = count($courseDetailData)/4;

        return view("admin.dashboards.manageCourse", compact("courseData", "courseDetailData", "speakerData", "count"));
    }

    public function managePurchaseHistory(){
        return view("admin.dashboards.managePurchaseHistory");
    }

    public function manageBootcamp(){
        return view("admin.dashboards.manageBootcamp");
    }
}
