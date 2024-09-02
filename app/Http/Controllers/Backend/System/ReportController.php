<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use App\Utils\Helpers\CRUDHelper;
use Exception;
use Spatie\Activitylog\Models\Activity;

class ReportController extends Controller
{
    public function index()
    {
        check_permission('report index');
        $reports = Activity::all();
        return view('backend.system.report.index', get_defined_vars());
    }

    public function cleanAllReport()
    {
        check_permission('report delete');
        try {
            Activity::truncate();
            alert()->success(__('messages.success'));
            return redirect(route('backend.report'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect(route('backend.report'));
        }
    }

    public function delReport($log)
    {
        check_permission('report delete');
        return CRUDHelper::remove_item('\Spatie\Activitylog\Models\Activity', $log);
    }
}
