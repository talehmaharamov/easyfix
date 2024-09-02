<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Utils\Helpers\CRUDHelper;

class MailController extends Controller
{
    public function index()
    {
        check_permission('mail index');
        $mails = Mail::all();
        return view('backend.system.mail.index', get_defined_vars());
    }

    public function delete(string $id)
    {
        check_permission('mail delete');
        return CRUDHelper::remove_item('\App\Models\Mail', $id);
    }
}
