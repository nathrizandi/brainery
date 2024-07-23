<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseMaterialDetail;
use App\Models\CourseMaterial;

class CourseMaterialDetailController extends Controller
{
    public function courseMedia($id) {
        $courseMedia = CourseMaterialDetail::join("course_materials","course_materials.id","=","course_material_details.courseMaterial_id")
        ->select([
            "course_materials.id as cmId", 
            "course_materials.title as week",
            "course_material_details.title as title",
            "course_material_details.courseMaterial_id as cmedId",
            "course_material_details.id",
            "course_material_details.description as desc",
            "course_material_details.video as video",
        ])
        ->where("course_material_details.id", $id)
        ->get();

        // dd("courseMedia");

        return view("course.media", compact("courseMedia"));

    }
}
