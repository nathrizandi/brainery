<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Log;

use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\CourseMaterialDetail;
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

        $speakerData = Speaker::all();
        $courseMaterialData = Course::join("course_materials", "course_materials.course_id", "=", "courses.id")
        ->join("course_material_details", "courseMaterial_id", "=", "course_materials.id")
        ->join("speakers", "speakers.id", "=", "courses.speaker_id")
        ->select([
            "courses.*",
            "course_materials.*",
            "course_material_details.*",
            "speakers.*",
            "courses.id as cId",
            "courses.image as cImage",
            "courses.title as cTitle",
            "courses.image as cImage",
            "courses.description as cDesc",
            "course_materials.id as cmId",
            "course_materials.course_id as cmCourseId",
            "course_materials.title as cmTitle",
            "course_material_details.id as cmdId",
            "course_material_details.title as cmdTitle",
            "course_material_details.video as cmdVideo",
            "course_material_details.description as cmdDesc",
            "speakers.id as sId",
            "speakers.nama as sNama",
            "speakers.image as sImage"
        ])
        ->get()
        ->groupBy("cmCourseId");

        $count = count($courseMaterialData);

        return view("admin.dashboards.manageCourse", compact("courseData", "speakerData", "courseMaterialData", "count"));
    }

    public function store(Request $request){
        $rules = [
            "courseName" => "required",
            "courseDesc" => "required|string",
            "speakers" => "required",
            // "courseImage" => "required|mimes:jpg,png,jpeg,gif:max:2048",
            "courseImage" => "required",
            "courseWeek1Title" => "required",
            "courseWeek1Video" => "required",
            "courseWeek1Desc" => "required|string",
            "courseWeek2Title" => "required",
            "courseWeek2Video" => "required",
            "courseWeek2Desc" => "required|string",
            "courseWeek3Title" => "required",
            "courseWeek3Video" => "required",
            "courseWeek3Desc" => "required|string",
            "courseWeek4Title" => "required",
            "courseWeek4Video" => "required",
            "courseWeek4Desc" => "required|string",
        ];

        $message = [
            'required' => ':attribute has to be filled',
            // 'min' => ':attribute must have at least :min character',
            // 'max' => ':attribute maximum character is :max',
            // 'courseImage.image' => ':attribute must be an image file',
            // 'courseImage.mimes' => ':attribute must be in these formats: jpg, png, jpeg, gif',
            // 'courseImage.max' => ':attribute cannot be greater than 2 MB'
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        // Log::info($request->all());

        if($validator->fails()) {
            // Log::error($validator->errors());

            return redirect()->back()
            ->withInput()
            ->withErrors($validator)
            ->with('danger', 'Make sure all fields are filled!');
        } else {
            $createCourse = Course::create([
                'title' => $request->courseName,
                'image' => $request->courseImage,
                'speaker_id' => $request->speakers,
                'description' => $request->courseDesc,
            ]);

            $courseID = $createCourse->id;

            for($i = 1; $i <= 4; $i++){
                $createCourseMaterial = CourseMaterial::create([
                    'course_id' => $courseID,
                    'title' => 'Week '.$i,
                ]);

                CourseMaterialDetail::create([
                    'courseMaterial_id' => $createCourseMaterial->id,
                    'title' => $request->input('courseWeek'.$i.'Title'),
                    'video' => $request->input('courseWeek'.$i.'Video'),
                    'description' => $request->input('courseWeek'.$i.'Desc'),
                ]);
            };

            return redirect()->intended(route('Course'));
        };
    }

    public function update(Request $request, $cId){
        $rules = [
            "courseNameEdit" => "required",
            "courseDescEdit" => "required|string",
            "speakersEdit" => "required",
            // "courseImage" => "required|mimes:jpg,png,jpeg,gif:max:2048",
            "courseImageEdit" => "required",
            "courseWeek1Id" => "required",
            "courseWeek1TitleEdit" => "required",
            "courseWeek1VideoEdit" => "required",
            "courseWeek1DescEdit" => "required|string",
            "courseWeek2Id" => "required",
            "courseWeek2TitleEdit" => "required",
            "courseWeek2VideoEdit" => "required",
            "courseWeek2DescEdit" => "required|string",
            "courseWeek3Id" => "required",
            "courseWeek3TitleEdit" => "required",
            "courseWeek3VideoEdit" => "required",
            "courseWeek3DescEdit" => "required|string",
            "courseWeek4Id" => "required",
            "courseWeek4TitleEdit" => "required",
            "courseWeek4VideoEdit" => "required",
            "courseWeek4DescEdit" => "required|string",
        ];

        $message = [
            'required' => ':attribute has to be filled',
            // 'min' => ':attribute must have at least :min character',
            // 'max' => ':attribute maximum character is :max',
            // 'courseImage.image' => ':attribute must be an image file',
            // 'courseImage.mimes' => ':attribute must be in these formats: jpg, png, jpeg, gif',
            // 'courseImage.max' => ':attribute cannot be greater than 2 MB'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()) {
            Log::error($validator->errors());
            return redirect()->back()
            ->withInput()
            ->withErrors($validator)
            ->with('danger', 'Make sure all fields are filled!');
        } else {
            Log::alert("success");
            $course = Course::findOrFail($cId);
            $course->title = $request->courseNameEdit;
            $course->image = $request->courseImageEdit;
            $course->speaker_id = $request->speakersEdit;
            $course->description = $request->courseDescEdit;
            $course->save();

            for($i = 1; $i <= 4; $i++){
                $courseMaterialDetail = CourseMaterialDetail::findorFail($request->input('courseWeek'.$i.'Id'));
                $courseMaterialDetail->title = $request->input('courseWeek'.$i.'TitleEdit');
                $courseMaterialDetail->video = $request->input('courseWeek'.$i.'VideoEdit');
                $courseMaterialDetail->description = $request->input('courseWeek'.$i.'DescEdit');
                $courseMaterialDetail->save();
            };

            return redirect()->intended(route('Course'));
        }
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->intended(route('Course'));
    }
}
