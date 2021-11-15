@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Import leads
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.import.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="name">Import File</label>
                    <input name="leads" type="file" class="form-control" accept=".csv">
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
