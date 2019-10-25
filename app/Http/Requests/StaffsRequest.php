<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffsRequest extends FormRequest
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
            'name' => 'required',
            'nrc' => 'required',
            'nrc_no' => 'required|unique:staff',
            'dob' => 'required',
            'fatherName' => 'required',
            'fatherJob' => 'required',
            'motherName' => 'required',
            'motherJob' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
            'gender' => 'required',
            'maritalStatus' => 'required',
            'bloodGroup' => 'required',
            'address' => 'required',
            'phoneNo' => 'required',
            'photo' => 'required'
        ];
    }
}
