<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'gloria',
            'gloria',
            'about',
            'slider',
            'category',
            'content',
            'languages',
            'settings',
            'admins',
            'permissions',
            'report',
            'dodenv',
            'blog',
            'partner',
            'faq',
            'meta',
        ];

        foreach ($permissions as $permission) {
            add_permission($permission);
        }
        $singlePermissions = [
            'contact index',
            'contact delete',
            'newsletter index',
            'newsletter create',
            'newsletter delete',
            'mail index',
            'mail delete',
        ];
        foreach ($singlePermissions as $single) {
            $permission = new \Spatie\Permission\Models\Permission();
            $permission->name = $single;
            $permission->guard_name = 'admin';
            $permission->save();
        }
    }
}
