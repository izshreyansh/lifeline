@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.nonProductive.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.non-productives.update", [$nonProductive->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required">{{ trans('cruds.nonProductive.fields.reason') }}</label>
                    <select class="form-control {{ $errors->has('reason') ? 'is-invalid' : '' }}" name="reason" id="reason" required>
                        <option value disabled {{ old('reason', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\NonProductive::REASON_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('reason', $nonProductive->reason) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('reason'))
                        <div class="invalid-feedback">
                            {{ $errors->first('reason') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.nonProductive.fields.reason_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
