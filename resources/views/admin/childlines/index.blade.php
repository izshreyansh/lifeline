@extends('layouts.admin')
@section('content')
    @can('childline_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.childlines.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.childline.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.childline.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Childline">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.childline.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.childline.fields.first_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.childline.fields.last_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.childline.fields.guardian_last_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.childline.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.childline.fields.gender') }}
                        </th>
                        <th>Category</th>
                        <th>
                            {{ trans('cruds.childline.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.childline.fields.follow_up_phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.childline.fields.referred_to') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($childlines as $key => $childline)
                        <tr data-entry-id="{{ $childline->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $childline->id ?? '' }}
                            </td>
                            <td>
                                {{ $childline->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $childline->last_name ?? '' }}
                            </td>
                            <td>
                                {{ $childline->guardian_last_name ?? '' }}
                            </td>
                            <td>
                                {{ $childline->phone ?? '' }}
                            </td>
                            <td>
                                {{ App\Childline::GENDER_SELECT[$childline->gender] ?? '' }}
                            </td>
                            <td>{{ $childline->category ?? '' }}</td>
                            <td>
                                {{ App\Childline::STATUS_SELECT[$childline->status] ?? '' }}
                            </td>
                            <td>
                                {{ $childline->follow_up_phone ?? '' }}
                            </td>
                            <td>
                                {{ App\Childline::REFERRED_TO_SELECT[$childline->referred_to] ?? '' }}
                            </td>
                            <td>
                                @can('childline_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.childlines.show', $childline->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('childline_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.childlines.edit', $childline->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('childline_delete')
                                    <form action="{{ route('admin.childlines.destroy', $childline->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('childline_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.childlines.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: { ids: ids, _method: 'DELETE' }})
                            .done(function () { location.reload() })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [[ 1, 'desc' ]],
                pageLength: 100,
            });
            let table = $('.datatable-Childline:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection
