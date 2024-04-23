<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Schedule $schedule)
{
    return view('schedules.index')->with(['schedules' => $schedule->getPaginateByLimit()]);
}
    public function show(Schedule $schedule)
{
    return view('schedules.show')->with(['schedules' => $schedule]);
}
    public function create()
{
    return view('schedules.create');
}
    public function store(Request $request, Schedule $schedule)
{
    $input = $request['schedule'];
    $schedule->fill($input)->save();
    return redirect('/schedules/' . $schedule->id);
}
}
