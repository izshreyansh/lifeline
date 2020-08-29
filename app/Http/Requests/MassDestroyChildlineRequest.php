<?php

namespace App\Http\Requests;

use App\Childline;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyChildlineRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('childline_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:childlines,id',
        ];
    }
}
