<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;
use App\Models\Publisher;
use App\Models\Speaker;
use Carbon\Carbon;


class BootcampController extends Controller
{
    public function bootcampMenu() {
        $bootcampMenu = Bootcamp::join("publishers", "publishers.id", "=", "bootcamps.publisher_id")
        ->select(["bootcamps.id", "publishers.image as pubImage", "bootcamps.title", "bootcamps.image as bootImage"])
        ->limit(4)
        ->get();

        return view("bootcamp.menu", compact("bootcampMenu"));
    }
    public function bootcampList() {
        $bootcampList = Bootcamp::join("publishers", "publishers.id", "=", "bootcamps.publisher_id")
        ->select(["bootcamps.id", "publishers.image as pubImage", "bootcamps.title", "bootcamps.image as bootImage"])
        ->get();

        return view("bootcamp.list", compact("bootcampList"));
    }

    public function bootcampDetail($id) {
        $bootcampDetail = Bootcamp::join("publishers", "publishers.id", "=", "bootcamps.publisher_id")
        ->join("speakers", "speakers.id", "=", "bootcamps.speaker_id")
        ->select(
            "publishers.nama as pubName",
            "publishers.image as pubImage",
            "bootcamps.image as bootImage", 
            "bootcamps.date as date",
            "bootcamps.title as bootTitle",
            "bootcamps.description as description",
            "bootcamps.start_time as startTime",
            "bootcamps.duration", // Select duration as well
            "speakers.image as spkImage",
            "speakers.nama as spkName"
        )
        ->where("bootcamps.id", $id)
        ->first(); // Use first() to get a single result

        if ($bootcampDetail) {
            try {
                // Assuming start_time is stored as HH:MM:SS
                $startTime = Carbon::createFromFormat('H:i:s', $bootcampDetail->startTime);
                $endTime = $startTime->copy()->addHours($bootcampDetail->duration);

                // Format start time and end time to HH:MM
                $formattedStartTime = $startTime->format('H:i');
                $formattedEndTime = $endTime->format('H:i');

                // For debugging
                // dd($bootcampDetail);

                return view("bootcamp.detail", compact("bootcampDetail", "formattedStartTime", "formattedEndTime"));
            } catch (\Exception $e) {
                dd('Error parsing time: ' . $e->getMessage());
            }
        } else {
            // Handle case where bootcamp detail is not found
            abort(404, 'Bootcamp not found');
        }

    }
}
