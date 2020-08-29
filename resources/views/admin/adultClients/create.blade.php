@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.adultClient.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.adult-clients.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="first_name">{{ trans('cruds.adultClient.fields.first_name') }}</label>
                    <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                    @if($errors->has('first_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('first_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.first_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="last_name">{{ trans('cruds.adultClient.fields.last_name') }}</label>
                    <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}" required>
                    @if($errors->has('last_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('last_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.last_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="phone">{{ trans('cruds.adultClient.fields.phone') }}</label>
                    <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                    @if($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.phone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="telephone">{{ trans('cruds.adultClient.fields.telephone') }}</label>
                    <input class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" type="text" name="telephone" id="telephone" value="{{ old('telephone', '') }}">
                    @if($errors->has('telephone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('telephone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.telephone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.adultClient.fields.province') }}</label>
                    <select class="form-control {{ $errors->has('province') ? 'is-invalid' : '' }}" name="province" id="province" required>
                        <option value disabled {{ old('province', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\AdultClient::PROVINCE_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('province', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('province'))
                        <div class="invalid-feedback">
                            {{ $errors->first('province') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.province_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="district">{{ trans('cruds.adultClient.fields.district') }}</label>
                    <input class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" type="text" name="district" id="district" value="{{ old('district', '') }}" required>
                    @if($errors->has('district'))
                        <div class="invalid-feedback">
                            {{ $errors->first('district') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.district_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.adultClient.fields.gender') }}</label>
                    <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" id="gender" required>
                        <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\AdultClient::GENDER_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('gender', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('gender'))
                        <div class="invalid-feedback">
                            {{ $errors->first('gender') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.gender_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.adultClient.fields.age') }}</label>
                    <select class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" name="age" id="age" required>
                        <option value disabled {{ old('age', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\AdultClient::AGE_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('age', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('age'))
                        <div class="invalid-feedback">
                            {{ $errors->first('age') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.age_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.adultClient.fields.medium') }}</label>
                    <select class="form-control {{ $errors->has('medium') ? 'is-invalid' : '' }}" name="medium" id="medium" required>
                        <option value disabled {{ old('medium', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\AdultClient::MEDIUM_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('medium', 'Radio') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('medium'))
                        <div class="invalid-feedback">
                            {{ $errors->first('medium') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.medium_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="counselling_notes">{{ trans('cruds.adultClient.fields.counselling_notes') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('counselling_notes') ? 'is-invalid' : '' }}" name="counselling_notes" id="counselling_notes">{!! old('counselling_notes') !!}</textarea>
                    @if($errors->has('counselling_notes'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counselling_notes') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.counselling_notes_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.adultClient.fields.status') }}</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\AdultClient::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', 'Open') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.status_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="incident_description">{{ trans('cruds.adultClient.fields.incident_description') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('incident_description') ? 'is-invalid' : '' }}" name="incident_description" id="incident_description">{!! old('incident_description') !!}</textarea>
                    @if($errors->has('incident_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('incident_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.incident_description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="follow_up">{{ trans('cruds.adultClient.fields.follow_up') }}</label>
                    <input class="form-control datetime {{ $errors->has('follow_up') ? 'is-invalid' : '' }}" type="text" name="follow_up" id="follow_up" value="{{ old('follow_up') }}">
                    @if($errors->has('follow_up'))
                        <div class="invalid-feedback">
                            {{ $errors->first('follow_up') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.follow_up_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="follow_up_phone">{{ trans('cruds.adultClient.fields.follow_up_phone') }}</label>
                    <input class="form-control {{ $errors->has('follow_up_phone') ? 'is-invalid' : '' }}" type="text" name="follow_up_phone" id="follow_up_phone" value="{{ old('follow_up_phone', '') }}">
                    @if($errors->has('follow_up_phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('follow_up_phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.follow_up_phone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.adultClient.fields.referred_to') }}</label>
                    <select class="form-control {{ $errors->has('referred_to') ? 'is-invalid' : '' }}" name="referred_to" id="referred_to">
                        <option value disabled {{ old('referred_to', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\AdultClient::REFERRED_TO_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('referred_to', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('referred_to'))
                        <div class="invalid-feedback">
                            {{ $errors->first('referred_to') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.adultClient.fields.referred_to_helper') }}</span>
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

@section('scripts')
    <script>
        $(document).ready(function () {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function (file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', '/admin/adult-clients/ckmedia', true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() { reject(genericErrorText) });
                                        xhr.addEventListener('abort', function() { reject() });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                                            }

                                            $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                                            resolve({ default: response.url });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', {{ $adultClient->id ?? 0 }});
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>

@endsection
