<?php

namespace App\Http\Controllers\Backend\AutoGenerate;

use App\Http\Controllers\Controller;
use App\Utils\Helpers\CRUDHelper;
use App\Models\AutoGenerate\Service;
use App\Models\AutoGenerate\ServiceTranslation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Utils\Traits\GeneralTrait;

class ServiceController extends Controller
{
    use GeneralTrait;
    public function index()
    {
        check_permission('service index');
        $services = Service::with('photos')->get();
        return view('backend.service.index', get_defined_vars());
    }

    public function create()
    {
        check_permission('service create');
        return view('backend.service.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        try {
            check_permission('service create');

            $service = new Service();

            $this->fillServiceAttributes($service, $request);

            $service->save();

            $this->updateOrSaveServiceTranslations($service, $request);

            $this->uploadNewPhotos($service, $request, 'AutoGenerate\ServicePhoto', 'service');

            alert()->success(__('messages.success'));
            return redirect(route('backend.service.index'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect(route('backend.service.index'));
        }
    }

    public function edit(string $id)
    {
        check_permission('service edit');
        $service = Service::where('id', $id)->with('photos')->first();
        return view('backend.service.edit', get_defined_vars());
    }
    public function update(Request $request, string $id)
    {
        try {
            check_permission('service edit');

            $service = Service::findOrFail($id);

            DB::transaction(function () use ($request, $service) {
                $this->fillServiceAttributes($service, $request);

                $this->uploadNewPhotos($service, $request, 'AutoGenerate\ServicePhoto', 'service');

                $this->updateOrSaveServiceTranslations($service, $request);

                $service->save();
            });

            alert()->success(__('messages.success'));
            return redirect()->back();
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

    private function fillServiceAttributes(Service $service, Request $request)
    {
        if ($request->hasFile('photo')) {
            $service->photo = upload('service', $request->file('photo'));
        }
        $service->slug = $request->slug;
    }

    private function updateOrSaveServiceTranslations(Service $service, Request $request)
    {
        foreach (active_langs() as $lang) {
            $translation = $service->translate($lang->code);

            if (!$translation) {
                $translation = new ServiceTranslation();
                $translation->locale = $lang->code;
                $translation->service_id = $service->id;
            }

            $translation->name = $request->name[$lang->code];
            $translation->description = $request->description[$lang->code];
            $translation->meta_title = $request->meta_title[$lang->code];
            $translation->meta_description = $request->meta_description[$lang->code];
            $translation->alt = $request->alt[$lang->code];
            $translation->save();
        }
    }

    public function status(string $id)
    {
        check_permission('service edit');
        return CRUDHelper::status('\App\Models\AutoGenerate\Service', $id);
    }

    public function delete(string $id)
    {
        check_permission('service delete');
        return CRUDHelper::remove_item('\App\Models\AutoGenerate\Service', $id);
    }
}
