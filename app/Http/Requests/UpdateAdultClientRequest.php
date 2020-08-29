<?php

namespace App\Http\Requests;

use App\AdultClient;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAdultClientRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('adult_client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'first_name'      => [
                'string',
                'required',
            ],
            'last_name'       => [
                'string',
                'required',
            ],
            'phone'           => [
                'string',
                'nullable',
            ],
            'telephone'       => [
                'string',
                'nullable',
            ],
            'province'        => [
                'required',
            ],
            'district'        => [
                'string',
                'required',
            ],
            'gender'          => [
                'required',
            ],
            'age'             => [
                'required',
            ],
            'medium'          => [
                'required',
            ],
            'follow_up'       => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'follow_up_phone' => [
                'string',
                'nullable',
            ],
        ];
    }
}
