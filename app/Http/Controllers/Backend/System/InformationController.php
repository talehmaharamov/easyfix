<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class InformationController extends Controller
{
    public function index()
    {
        return view('backend.system.information.index', get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        try {
            Admin::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            alert()->success(__('messages.success'));
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'min:6'],
            'password_confirmation' => ['required_with:password', 'same:password'],
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, Auth::user()->password)) {
                        $fail('Cari şifrənizi düzgün daxil edin!');
                    }
                }
            ]
        ]);

        if ($validator->fails()) {
            alert()->error(__('validation.error'))->withErrors($validator)->withInput();
            return redirect()->back();
        }

        try {
            Admin::find($request->id)->update([
                'password' => Hash::make($request->password),
            ]);
            alert()->success(__('messages.success'));
            return redirect()->back();
        } catch (Exception $e) {
            alert()->error(__('messages.error') . $e);
            return redirect()->route('backend.information.index');
        }
    }
}
