@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.adultClient.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.adult-clients.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.id') }}
                        </th>
                        <td>
                            {{ $adultClient->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.first_name') }}
                        </th>
                        <td>
                            {{ $adultClient->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.last_name') }}
                        </th>
                        <td>
                            {{ $adultClient->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.phone') }}
                        </th>
                        <td>
                            {{ $adultClient->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.telephone') }}
                        </th>
                        <td>
                            {{ $adultClient->telephone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.province') }}
                        </th>
                        <td>
                            {{ App\AdultClient::PROVINCE_SELECT[$adultClient->province] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.district') }}
                        </th>
                        <td>
                            {{ $adultClient->district }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.gender') }}
                        </th>
                        <td>
                            {{ App\AdultClient::GENDER_SELECT[$adultClient->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.age') }}
                        </th>
                        <td>
                            {{ App\AdultClient::AGE_SELECT[$adultClient->age] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.medium') }}
                        </th>
                        <td>
                            {{ App\AdultClient::MEDIUM_SELECT[$adultClient->medium] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.counselling_notes') }}
                        </th>
                        <td>
                            {!! $adultClient->counselling_notes !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.status') }}
                        </th>
                        <td>
                            {{ App\AdultClient::STATUS_SELECT[$adultClient->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.incident_description') }}
                        </th>
                        <td>
                            {!! $adultClient->incident_description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.follow_up') }}
                        </th>
                        <td>
                            {{ $adultClient->follow_up }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.follow_up_phone') }}
                        </th>
                        <td>
                            {{ $adultClient->follow_up_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adultClient.fields.referred_to') }}
                        </th>
                        <td>
                            {{ App\AdultClient::REFERRED_TO_SELECT[$adultClient->referred_to] ?? '' }}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.adult-clients.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
