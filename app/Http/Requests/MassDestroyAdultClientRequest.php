<?php

namespace App\Http\Requests;

use App\AdultClient;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAdultClientRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('adult_client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:adult_clients,id',
        ];
    }
}
