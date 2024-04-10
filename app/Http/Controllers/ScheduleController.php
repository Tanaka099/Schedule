<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index(Schedule $schedule)//インポートしたPostをインスタンス化して$postとして使用。
{
    return $schedule->get();//$postの中身を戻り値にする。
}
}
