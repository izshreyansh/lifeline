<?php

namespace App\Http\Controllers\Admin;

use App\AdultClient;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAdultClientRequest;
use App\Http\Requests\StoreAdultClientRequest;
use App\Http\Requests\UpdateAdultClientRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AdultClientsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('adult_client_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adultClients = AdultClient::all();

        return view('admin.adultClients.index', compact('adultClients'));
    }

    public function create()
    {
        abort_if(Gate::denies('adult_client_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.adultClients.create');
    }

    public function store(StoreAdultClientRequest $request)
    {
        $adultClient = AdultClient::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $adultClient->id]);
        }

        return redirect()->route('admin.adult-clients.index');
    }

    public function edit(AdultClient $adultClient)
    {
        abort_if(Gate::denies('adult_client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.adultClients.edit', compact('adultClient'));
    }

    public function update(UpdateAdultClientRequest $request, AdultClient $adultClient)
    {
        $adultClient->update($request->all());

        return redirect()->route('admin.adult-clients.index');
    }

    public function show(AdultClient $adultClient)
    {
        abort_if(Gate::denies('adult_client_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.adultClients.show', compact('adultClient'));
    }

    public function destroy(AdultClient $adultClient)
    {
        abort_if(Gate::denies('adult_client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adultClient->delete();

        return back();
    }

    public function massDestroy(MassDestroyAdultClientRequest $request)
    {
        AdultClient::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('adult_client_create') && Gate::denies('adult_client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AdultClient();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
