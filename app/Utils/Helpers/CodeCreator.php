<?php

namespace App\Utils\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;

class CodeCreator
{
    public static function create($name, $translateModel = false, $photoModel = false): void
    {
        $creator = new self();

        $creator->createMainModel($name);

        if ($photoModel) {
            $creator->createPhotoModel($name);
        }

        if ($translateModel) {
            $creator->createTranslationModel($name);
        }

        $creator->createRoutes($name);
        $creator->createController($name);
        $creator->updatePermissionSeeder($name);
        $creator->addPermissions($name);
        $creator->createBladeAndTranslations($name);
    }

    private function createRoutes($name): void
    {
        Artisan::call('create-status-route ' . Str::lower($name) . ' ' . $name);
        Artisan::call('create-delete-route ' . Str::lower($name) . ' ' . $name);
        Artisan::call('create-resource-route ' . Str::lower($name) . ' ' . $name);
    }

    private function createController($name): void
    {
//        Artisan::call('make:controller Api/' . $name . 'Controller');
        Artisan::call('fill-controller:functions ' . $name);
    }

    private function updatePermissionSeeder($name): void
    {
        $permissionSeederPath = base_path('database/seeders/PermissionsSeeder.php');
        $newPermission = "       '" . Str::lower($name) . "',";

        // Read the content of the PermissionsSeeder.php file
        $content = file_get_contents($permissionSeederPath);

        // Append the new permission to the $permissions array
        $content = preg_replace("/(\\\$permissions = \[)([^\]]*)(\];)/s", "$1$2    $newPermission\n$3", $content);

        // Write the updated content back to the file
        file_put_contents($permissionSeederPath, $content);
    }

    private function createMainModel($name): void
    {
        Artisan::call('main-model', ['model' => $name]);
    }

    private function createPhotoModel($name): void
    {
        Artisan::call('photo-model', ['model' => $name]);
    }

    private function createTranslationModel($name): void
    {
        Artisan::call('translation-model', ['model' => $name]);
    }

    private function addPermissions($name): void
    {
        add_permission(Str::lower($name));
    }

    private function createBladeAndTranslations($name): void
    {
        Artisan::call('app:create-blade ' . Str::lower($name));
        Artisan::call('translation:add ' . Str::lower($name));
    }
}
