<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreviousHotelsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'staff_name' => 'required',
            'hotel_name' => 'required',
            'position' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'manager_name' => 'required'
        ];
    }
}
