<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\ContentTranslation;
use App\Utils\Helpers\CRUDHelper;
use App\Utils\Traits\GeneralTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    use GeneralTrait;

    public function index()
    {
        check_permission('content index');
        $contents = Content::with('photos')->get();
        return view('backend.content.index', get_defined_vars());
    }

    public function create()
    {
        check_permission('content create');
        return view('backend.content.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        try {
            check_permission('content create');

            $content = new Content();

            $this->fillContentAttributes($content, $request);

            $content->save();

            $this->updateOrSaveContentTranslations($content, $request);

            $this->uploadNewPhotos($content, $request, 'ContentPhotos', 'content');

            alert()->success(__('messages.success'));
            return redirect(route('backend.content.index'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect(route('backend.content.index'));
        }
    }


    public function update(Request $request, string $id)
    {
        try {
            check_permission('content edit');

            $content = Content::findOrFail($id);

            DB::transaction(function () use ($request, $content) {
                $this->fillContentAttributes($content, $request);

                $this->uploadNewPhotos($content, $request, 'ContentPhotos', 'content');

                $this->updateOrSaveContentTranslations($content, $request);

                $content->save();
            });

            alert()->success(__('messages.success'));
            return redirect()->back();
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

    private function fillContentAttributes(Content $content, Request $request)
    {
        if ($request->hasFile('photo')) {
            $content->photo = upload('content', $request->file('photo'));
        }
        $content->slug = $request->slug;
    }

    private function updateOrSaveContentTranslations(Content $content, Request $request)
    {
        foreach (active_langs() as $lang) {
            $translation = $content->translate($lang->code);

            if (!$translation) {
                $translation = new ContentTranslation();
                $translation->locale = $lang->code;
                $translation->content_id = $content->id;
            }

            $translation->name = $request->name[$lang->code];
            $translation->content = $request->content1[$lang->code];
            $translation->meta_title = $request->meta_title[$lang->code];
            $translation->meta_description = $request->meta_description[$lang->code];
            $translation->alt = $request->alt[$lang->code];
            $translation->save();
        }
    }

    public function edit(string $id)
    {
        check_permission('content edit');
        $content = Content::where('id', $id)->with('photos')->first();
        return view('backend.content.edit', get_defined_vars());
    }

    public function status(string $id)
    {
        check_permission('content edit');
        return CRUDHelper::status('\App\Models\Content', $id);
    }

    public function delete(string $id)
    {
        check_permission('content delete');
        return CRUDHelper::remove_item('\App\Models\Content', $id);
    }

    public function deletePhoto($id)
    {
        check_permission('content delete');
        return CRUDHelper::remove_item('\App\Models\ContentPhotos', $id);
    }
}
