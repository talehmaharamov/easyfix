<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Meta;
use App\Models\Setting;
use App\Utils\Helpers\CRUDHelper;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function index()
    {
        $counts = [
            'admins' => count(Admin::all()),
            'faq' => count(Faq::all()),
            'meta' => count(Meta::all()),
            'settings' => count(Setting::all()),
            'contact' => count(Contact::all())
        ];
        return view('backend.dashboard',get_defined_vars());
    }

    public function clearCache()
    {
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('clear-compiled');
        alert()->success(__('messages.success'));
        return redirect()->back();
    }

    public function deletePhoto($modelName, $id)
    {
        check_permission(Str::lower($modelName) . ' delete');
        return CRUDHelper::remove_item('\App\Models\\' . $modelName . 'Photos', $id);
    }
}
