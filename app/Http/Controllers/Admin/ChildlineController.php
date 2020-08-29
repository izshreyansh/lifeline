<?php

namespace App\Http\Controllers\Admin;

use App\Childline;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyChildlineRequest;
use App\Http\Requests\StoreChildlineRequest;
use App\Http\Requests\UpdateChildlineRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ChildlineController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('childline_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $childlines = Childline::all();

        return view('admin.childlines.index', compact('childlines'));
    }

    public function create()
    {
        abort_if(Gate::denies('childline_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.childlines.create');
    }

    public function store(StoreChildlineRequest $request)
    {
        $childline = Childline::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $childline->id]);
        }

        return redirect()->route('admin.childlines.index');
    }

    public function edit(Childline $childline)
    {
        abort_if(Gate::denies('childline_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.childlines.edit', compact('childline'));
    }

    public function update(UpdateChildlineRequest $request, Childline $childline)
    {
        $childline->update($request->all());

        return redirect()->route('admin.childlines.index');
    }

    public function show(Childline $childline)
    {
        abort_if(Gate::denies('childline_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.childlines.show', compact('childline'));
    }

    public function destroy(Childline $childline)
    {
        abort_if(Gate::denies('childline_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $childline->delete();

        return back();
    }

    public function massDestroy(MassDestroyChildlineRequest $request)
    {
        Childline::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('childline_create') && Gate::denies('childline_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Childline();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
