<?php

namespace App\Http\Requests;

use App\Childline;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateChildlineRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('childline_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'first_name'          => [
                'string',
                'required',
            ],
            'last_name'           => [
                'string',
                'required',
            ],
            'mother_first_name'   => [
                'string',
                'nullable',
            ],
            'mother_last_name'    => [
                'string',
                'nullable',
            ],
            'mother_phone'        => [
                'string',
                'nullable',
            ],
            'father_first_name'   => [
                'string',
                'nullable',
            ],
            'father_last_name'    => [
                'string',
                'nullable',
            ],
            'father_phone'        => [
                'string',
                'nullable',
            ],
            'guardian_first_name' => [
                'string',
                'nullable',
            ],
            'guardian_last_name'  => [
                'string',
                'nullable',
            ],
            'guardian_phone'      => [
                'string',
                'nullable',
            ],
            'phone'               => [
                'string',
                'nullable',
            ],
            'telephone'           => [
                'string',
                'nullable',
            ],
            'province'            => [
                'required',
            ],
            'district'            => [
                'string',
                'required',
            ],
            'gender'              => [
                'required',
            ],
            'age'                 => [
                'required',
            ],
            'medium'              => [
                'required',
            ],
            'follow_up'           => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'follow_up_phone'     => [
                'string',
                'nullable',
            ],
        ];
    }
}
