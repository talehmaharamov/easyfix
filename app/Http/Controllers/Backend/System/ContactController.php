<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Utils\Helpers\CRUDHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    public function index()
    {
        check_permission('contact index');
        $contacts = Contact::all();
        return view('backend.system.contact.index', get_defined_vars());
    }

    public function sendMessage(Request $request)
    {
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->read_status = 0;
            $contact->message = $request->message;
            $contact->save();
            return redirect()->back()->with('successMessage', __('messages.send-success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('errorMessage', __('messages.error'));
        }
    }

    public function readContact($id)
    {
        check_permission('contact index');
        $message = Contact::find($id);
        if ($message->read_status == 0) {
            $message->update(['read_status' => 1]);
        }
        activity()
            ->performedOn($message)
            ->event('read')
            ->causedBy(auth()->guard('admin')->user())
            ->withProperties(['id' => $message->id, 'email' => $message->email, 'phone' => $message->phone, 'message' => $message->message])
            ->log('read');
        return view('backend.system.contact.read', get_defined_vars());
    }

    public function delContactUS($id)
    {
        check_permission('contact delete');
        return CRUDHelper::remove_item('\App\Models\Contact',$id);
    }
}
