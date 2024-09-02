<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Utils\Helpers\CRUDHelper;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function index()
    {
        check_permission('admins index');
        $users = Admin::all();
        $permissions = Permission::all();
        return view('backend.system.admins.index', get_defined_vars());
    }

    public function create()
    {
        abort_if(Gate::denies('admins create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.system.admins.create');
    }

    public function delAdmin($id)
    {
       check_permission('admins delete');
       return CRUDHelper::remove_item('App\Models\Admin',$id);
    }
    public function store(Request $request)
    {
        check_permission('admins create');
        try {
            Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            alert()->success(__('messages.success'));
            return redirect()->route('backend.admins.index');
        } catch (\Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->route('backend.admins.index');
        }
    }
}
