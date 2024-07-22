<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\Speaker;


class AdminCourseController extends Controller
{
    //
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

    public function store(Request $request){
        $rules = [
            "courseName" => "required",
            "courseDesc" => "required|string|min:3|max:255",
            "speakers" => "required",
            "courseImage" => "required|mimes:jpg,png,jpeg,gif:max:2048",
            "courseWeek1Title" => "required",
            "courseWeek1Video" => "required",
            "courseWeek1Desc" => "required|string|min:3|max:255",
            "courseWeek2Title" => "required",
            "courseWeek2Video" => "required",
            "courseWeek2Desc" => "required|string|min:3|max:255",
            "courseWeek3Title" => "required",
            "courseWeek3Video" => "required",
            "courseWeek3Desc" => "required|string|min:3|max:255",
            "courseWeek4Title" => "required",
            "courseWeek4Video" => "required",
            "courseWeek4Desc" => "required|string|min:3|max:255",
        ];

        $message = [
            'required' => ':attribute has to be filled',
            'min' => ':attribute must have at least :min character',
            'max' => ':attribute maximum character is :max',
            'courseImage.image' => ':attribute must be an image file',
            'courseImage.mimes' => ':attribute must be in these formats: jpg, png, jpeg, gif',
            'courseImage.max' => ':attribute cannot be greater than 2 MB'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()) {
            return redirect()->back()
            ->withInput()
            ->withErrors($validator)
            ->with('danger', 'Make sure all fields are filled!');
        }
    }
}
