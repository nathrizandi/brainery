<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\CourseMaterialDetail;

class CourseMaterialController extends Controller
{
    public function courseMaterial($id) {
        $courseMaterial = CourseMaterial::join("courses","courses.id","=","course_materials.course_id")
        ->join("speakers","speakers.id","=","courses.speaker_id")
        ->join("course_material_details","course_materials.id","=","course_material_details.courseMaterial_id")
        ->select([
            "courses.id as courseId", 
            "courses.title as title",
            "speakers.id as spkId", 
            "speakers.nama as spkName",
            "speakers.image as spkImage",
            "course_materials.id as cmId", 
            "course_materials.title as week",
            "course_material_details.title as subTitle",
            "courses.description as desc"
        ])
        ->where("courses.id", $id)
        ->first();

        $courseWeek = CourseMaterial::join("courses","courses.id","=","course_materials.course_id")
        ->join("speakers","speakers.id","=","courses.speaker_id")
        ->join("course_material_details","course_materials.id","=","course_material_details.courseMaterial_id")
        ->select([
            "courses.id as courseId", 
            "courses.title as title",
            "speakers.id as spkId", 
            "speakers.nama as spkName",
            "speakers.image as spkImage",
            "course_materials.id as cmId", 
            "course_materials.title as week",
            "course_material_details.title as subTitle",
            "courses.description as desc"
        ])
        ->where("course_materials.id", $id)
        ->get();
        // dd($courseMaterial);
        return view("course.detail", compact("courseMaterial", "courseWeek"));
    }
}
