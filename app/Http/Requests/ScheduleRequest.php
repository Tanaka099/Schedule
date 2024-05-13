<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'schedule.day' => 'required|date|',
            'schedule.starttime'=> 'required|time|',
            'schedule.endtime'=> 'required|time|',
            'schedule.title' => 'required|string|max:100',
            'schedule.body' => 'required|string|max:4000',
            'schedule.star'=> 'required|boolean|',
        ];
    }
}
