@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.childline.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.childlines.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.id') }}
                        </th>
                        <td>
                            {{ $childline->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.first_name') }}
                        </th>
                        <td>
                            {{ $childline->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.last_name') }}
                        </th>
                        <td>
                            {{ $childline->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.mother_first_name') }}
                        </th>
                        <td>
                            {{ $childline->mother_first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.mother_last_name') }}
                        </th>
                        <td>
                            {{ $childline->mother_last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.mother_phone') }}
                        </th>
                        <td>
                            {{ $childline->mother_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.father_first_name') }}
                        </th>
                        <td>
                            {{ $childline->father_first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.father_last_name') }}
                        </th>
                        <td>
                            {{ $childline->father_last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.father_phone') }}
                        </th>
                        <td>
                            {{ $childline->father_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.guardian_first_name') }}
                        </th>
                        <td>
                            {{ $childline->guardian_first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.guardian_last_name') }}
                        </th>
                        <td>
                            {{ $childline->guardian_last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.guardian_phone') }}
                        </th>
                        <td>
                            {{ $childline->guardian_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.phone') }}
                        </th>
                        <td>
                            {{ $childline->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.province') }}
                        </th>
                        <td>
                            {{ App\Childline::PROVINCE_SELECT[$childline->province] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.district') }}
                        </th>
                        <td>
                            {{ $childline->district }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Childline::GENDER_SELECT[$childline->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.age') }}
                        </th>
                        <td>
                            {{ App\Childline::AGE_SELECT[$childline->age] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.medium') }}
                        </th>
                        <td>
                            {{ App\Childline::MEDIUM_SELECT[$childline->medium] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.counselling_notes') }}
                        </th>
                        <td>
                            {!! $childline->counselling_notes !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Category
                        </th>
                        <td>
                            {{ $childline->category }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.status') }}
                        </th>
                        <td>
                            {{ App\Childline::STATUS_SELECT[$childline->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.incident_description') }}
                        </th>
                        <td>
                            {!! $childline->incident_description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.follow_up') }}
                        </th>
                        <td>
                            {{ $childline->follow_up }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.follow_up_phone') }}
                        </th>
                        <td>
                            {{ $childline->follow_up_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.childline.fields.referred_to') }}
                        </th>
                        <td>
                            {{ App\Childline::REFERRED_TO_SELECT[$childline->referred_to] ?? '' }}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.childlines.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
