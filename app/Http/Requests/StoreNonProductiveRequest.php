<?php

namespace App\Http\Requests;

use App\NonProductive;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreNonProductiveRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('non_productive_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'reason' => [
                'required',
            ],
        ];
    }
}
