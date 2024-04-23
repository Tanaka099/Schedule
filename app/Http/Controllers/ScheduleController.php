<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Http\Requests\ScheduleRequest;

class ScheduleController extends Controller
{
    public function index(Schedule $schedule)
{
    return view('schedules.index')->with(['schedules' => $schedule->getPaginateByLimit()]);
}

    public function show(Schedule $schedule)
{
    return view('schedules.show')->with(['schedule' => $schedule]);
}

    public function create()
{
    return view('schedules.create');
}

    public function store(Request $request, Post $post)
{
    $input = $request['schedule'];
    $post->fill($input)->save();
    return redirect('/schedules/' . $schedule->id);
}

}
