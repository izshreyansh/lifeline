@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Download Reports
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.reports.create") }}">
                @csrf
                <div class="form-group">
                    <label class="required" for="resource">Resource</label>
                    <select name="resource" id="resource" class="form-control">
                        <option value="lifeline">LifeLine</option>
                        <option value="childline">ChildLine</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="required" for="category">Resource</label>
                    <select name="category" id="category" class="form-control">
                        @foreach(config('app.categories') as $key => $label)
                            <option
                                value="{{ $label }}">{{ $label }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-download"></i>
                        Download
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
