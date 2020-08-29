<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNonProductiveRequest;
use App\Http\Requests\StoreNonProductiveRequest;
use App\Http\Requests\UpdateNonProductiveRequest;
use App\NonProductive;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NonProductiveController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('non_productive_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $nonProductives = NonProductive::all();

        return view('admin.nonProductives.index', compact('nonProductives'));
    }

    public function create()
    {
        abort_if(Gate::denies('non_productive_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nonProductives.create');
    }

    public function store(StoreNonProductiveRequest $request)
    {
        $nonProductive = NonProductive::create($request->all());

        return redirect()->route('admin.non-productives.index');
    }

    public function edit(NonProductive $nonProductive)
    {
        abort_if(Gate::denies('non_productive_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nonProductives.edit', compact('nonProductive'));
    }

    public function update(UpdateNonProductiveRequest $request, NonProductive $nonProductive)
    {
        $nonProductive->update($request->all());

        return redirect()->route('admin.non-productives.index');
    }

    public function show(NonProductive $nonProductive)
    {
        abort_if(Gate::denies('non_productive_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nonProductives.show', compact('nonProductive'));
    }

    public function destroy(NonProductive $nonProductive)
    {
        abort_if(Gate::denies('non_productive_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $nonProductive->delete();

        return back();
    }

    public function massDestroy(MassDestroyNonProductiveRequest $request)
    {
        NonProductive::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
