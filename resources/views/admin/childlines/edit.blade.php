@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.childline.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.childlines.update", [$childline->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="first_name">{{ trans('cruds.childline.fields.first_name') }}</label>
                    <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', $childline->first_name) }}" required>
                    @if($errors->has('first_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('first_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.first_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="last_name">{{ trans('cruds.childline.fields.last_name') }}</label>
                    <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', $childline->last_name) }}" required>
                    @if($errors->has('last_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('last_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.last_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="mother_first_name">{{ trans('cruds.childline.fields.mother_first_name') }}</label>
                    <input class="form-control {{ $errors->has('mother_first_name') ? 'is-invalid' : '' }}" type="text" name="mother_first_name" id="mother_first_name" value="{{ old('mother_first_name', $childline->mother_first_name) }}">
                    @if($errors->has('mother_first_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mother_first_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.mother_first_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="mother_last_name">{{ trans('cruds.childline.fields.mother_last_name') }}</label>
                    <input class="form-control {{ $errors->has('mother_last_name') ? 'is-invalid' : '' }}" type="text" name="mother_last_name" id="mother_last_name" value="{{ old('mother_last_name', $childline->mother_last_name) }}">
                    @if($errors->has('mother_last_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mother_last_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.mother_last_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="mother_phone">{{ trans('cruds.childline.fields.mother_phone') }}</label>
                    <input class="form-control {{ $errors->has('mother_phone') ? 'is-invalid' : '' }}" type="text" name="mother_phone" id="mother_phone" value="{{ old('mother_phone', $childline->mother_phone) }}">
                    @if($errors->has('mother_phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mother_phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.mother_phone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="father_first_name">{{ trans('cruds.childline.fields.father_first_name') }}</label>
                    <input class="form-control {{ $errors->has('father_first_name') ? 'is-invalid' : '' }}" type="text" name="father_first_name" id="father_first_name" value="{{ old('father_first_name', $childline->father_first_name) }}">
                    @if($errors->has('father_first_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('father_first_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.father_first_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="father_last_name">{{ trans('cruds.childline.fields.father_last_name') }}</label>
                    <input class="form-control {{ $errors->has('father_last_name') ? 'is-invalid' : '' }}" type="text" name="father_last_name" id="father_last_name" value="{{ old('father_last_name', $childline->father_last_name) }}">
                    @if($errors->has('father_last_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('father_last_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.father_last_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="father_phone">{{ trans('cruds.childline.fields.father_phone') }}</label>
                    <input class="form-control {{ $errors->has('father_phone') ? 'is-invalid' : '' }}" type="text" name="father_phone" id="father_phone" value="{{ old('father_phone', $childline->father_phone) }}">
                    @if($errors->has('father_phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('father_phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.father_phone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="guardian_first_name">{{ trans('cruds.childline.fields.guardian_first_name') }}</label>
                    <input class="form-control {{ $errors->has('guardian_first_name') ? 'is-invalid' : '' }}" type="text" name="guardian_first_name" id="guardian_first_name" value="{{ old('guardian_first_name', $childline->guardian_first_name) }}">
                    @if($errors->has('guardian_first_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('guardian_first_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.guardian_first_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="guardian_last_name">{{ trans('cruds.childline.fields.guardian_last_name') }}</label>
                    <input class="form-control {{ $errors->has('guardian_last_name') ? 'is-invalid' : '' }}" type="text" name="guardian_last_name" id="guardian_last_name" value="{{ old('guardian_last_name', $childline->guardian_last_name) }}">
                    @if($errors->has('guardian_last_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('guardian_last_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.guardian_last_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="guardian_phone">{{ trans('cruds.childline.fields.guardian_phone') }}</label>
                    <input class="form-control {{ $errors->has('guardian_phone') ? 'is-invalid' : '' }}" type="text" name="guardian_phone" id="guardian_phone" value="{{ old('guardian_phone', $childline->guardian_phone) }}">
                    @if($errors->has('guardian_phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('guardian_phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.guardian_phone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="phone">{{ trans('cruds.childline.fields.phone') }}</label>
                    <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $childline->phone) }}">
                    @if($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.phone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="telephone">{{ trans('cruds.childline.fields.telephone') }}</label>
                    <input class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" type="text" name="telephone" id="telephone" value="{{ old('telephone', $childline->telephone) }}">
                    @if($errors->has('telephone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('telephone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.telephone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.childline.fields.province') }}</label>
                    <select class="form-control {{ $errors->has('province') ? 'is-invalid' : '' }}" name="province" id="province" required>
                        <option value disabled {{ old('province', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Childline::PROVINCE_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('province', $childline->province) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('province'))
                        <div class="invalid-feedback">
                            {{ $errors->first('province') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.province_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="district">{{ trans('cruds.childline.fields.district') }}</label>
                    <select class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" type="text" name="district" id="district"  required>
                        <option value="{{ $childline->district }}">{{$childline->district}}</option>
                    </select>
                    @if($errors->has('district'))
                        <div class="invalid-feedback">
                            {{ $errors->first('district') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.district_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.childline.fields.gender') }}</label>
                    <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" id="gender" required>
                        <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Childline::GENDER_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('gender', $childline->gender) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('gender'))
                        <div class="invalid-feedback">
                            {{ $errors->first('gender') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.gender_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.childline.fields.age') }}</label>
                    <select class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" name="age" id="age" required>
                        <option value disabled {{ old('age', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Childline::AGE_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('age', $childline->age) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('age'))
                        <div class="invalid-feedback">
                            {{ $errors->first('age') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.age_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.childline.fields.medium') }}</label>
                    <select class="form-control {{ $errors->has('medium') ? 'is-invalid' : '' }}" name="medium" id="medium" required>
                        <option value disabled {{ old('medium', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Childline::MEDIUM_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('medium', $childline->medium) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('medium'))
                        <div class="invalid-feedback">
                            {{ $errors->first('medium') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.medium_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="counselling_notes">{{ trans('cruds.childline.fields.counselling_notes') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('counselling_notes') ? 'is-invalid' : '' }}" name="counselling_notes" id="counselling_notes">{!! old('counselling_notes', $childline->counselling_notes) !!}</textarea>
                    @if($errors->has('counselling_notes'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counselling_notes') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.counselling_notes_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.childline.fields.status') }}</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Childline::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', $childline->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.status_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="incident_description">{{ trans('cruds.childline.fields.incident_description') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('incident_description') ? 'is-invalid' : '' }}" name="incident_description" id="incident_description">{!! old('incident_description', $childline->incident_description) !!}</textarea>
                    @if($errors->has('incident_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('incident_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.incident_description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control disabled" readonly value="{{ $childline->category ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="follow_up">{{ trans('cruds.childline.fields.follow_up') }}</label>
                    <input class="form-control datetime {{ $errors->has('follow_up') ? 'is-invalid' : '' }}" type="text" name="follow_up" id="follow_up" value="{{ old('follow_up', $childline->follow_up) }}">
                    @if($errors->has('follow_up'))
                        <div class="invalid-feedback">
                            {{ $errors->first('follow_up') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.follow_up_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="follow_up_phone">{{ trans('cruds.childline.fields.follow_up_phone') }}</label>
                    <input class="form-control {{ $errors->has('follow_up_phone') ? 'is-invalid' : '' }}" type="text" name="follow_up_phone" id="follow_up_phone" value="{{ old('follow_up_phone', $childline->follow_up_phone) }}">
                    @if($errors->has('follow_up_phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('follow_up_phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.follow_up_phone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.childline.fields.referred_to') }}</label>
                    <select class="form-control {{ $errors->has('referred_to') ? 'is-invalid' : '' }}" name="referred_to" id="referred_to">
                        <option value disabled {{ old('referred_to', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Childline::REFERRED_TO_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('referred_to', $childline->referred_to) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('referred_to'))
                        <div class="invalid-feedback">
                            {{ $errors->first('referred_to') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.childline.fields.referred_to_helper') }}</span>
                </div>

                <div class="form-group">
                    <label>Referred to Name</label>
                    <input class="form-control {{ $errors->has('referred_to_name') ? 'is-invalid' : '' }}" type="text"
                           name="referred_to_name" id="referred_to_name" value="{{ old('referred_to_name', $childline->referred_to_name) }}"
                           placeholder="Referred to Name">
                    @if($errors->has('referred_to_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('referred_to_name') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Referred to Contact</label>
                    <input class="form-control {{ $errors->has('referred_to_contact') ? 'is-invalid' : '' }}" type="text"
                           name="referred_to_contact" id="referred_to_contact" value="{{ old('referred_to_contact', $childline->referred_to_contact) }}"
                           placeholder="Referred to Contact">
                    @if($errors->has('referred_to_contact'))
                        <div class="invalid-feedback">
                            {{ $errors->first('referred_to_contact') }}
                        </div>
                    @endif
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
                                        xhr.open('POST', '/admin/childlines/ckmedia', true);
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
                                        data.append('crud_id', {{ $childline->id ?? 0 }});
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

            var districts = [];

            $.getJSON('/js/province_district.json').done((data)=> {districts =  data});

            $( "#province" ).change(function() {

                $("#district option").remove();

                $.each(districts[$(this).val()], function(key, value) {
                    $("#district").append($("<option />").val(value).text(value));
                });
            });
        });
    </script>

@endsection
