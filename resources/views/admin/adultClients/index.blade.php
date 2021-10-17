@extends('layouts.admin')
@section('content')
    @can('adult_client_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.adult-clients.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.adultClient.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.adultClient.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-AdultClient">
                    <thead>
                    <tr>
                        <th width="10"></th>
                        <th>
                            {{ trans('cruds.adultClient.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.adultClient.fields.first_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.adultClient.fields.last_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.adultClient.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.adultClient.fields.gender') }}
                        </th>
                        <th>Category</th>
                        <th>
                            {{ trans('cruds.adultClient.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.adultClient.fields.medium') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($adultClients as $key => $adultClient)
                        <tr data-entry-id="{{ $adultClient->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $adultClient->id ?? '' }}
                            </td>
                            <td>
                                {{ $adultClient->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $adultClient->last_name ?? '' }}
                            </td>
                            <td>
                                {{ $adultClient->phone ?? '' }}
                            </td>
                            <td>
                                {{ App\AdultClient::GENDER_SELECT[$adultClient->gender] ?? '' }}
                            </td>
                            <td>{{ $adultClient->category ?? '' }}</td>
                            <td>
                                {{ App\AdultClient::STATUS_SELECT[$adultClient->status] ?? '' }}
                            </td>
                            <td>
                                {{ $adultClient->medium ?? '' }}
                            </td>
                            <td>
                                @can('adult_client_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.adult-clients.show', $adultClient->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                               {{-- @can('adult_client_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.adult-clients.edit', $adultClient->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan--}}

                                {{--@can('adult_client_delete')
                                    <form action="{{ route('admin.adult-clients.destroy', $adultClient->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan--}}

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
            {{--@can('adult_client_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.adult-clients.massDestroy') }}",
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
            @endcan--}}

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [[ 1, 'desc' ]],
                pageLength: 100,
            });
            let table = $('.datatable-AdultClient:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection
