<?php

namespace App\Console\Commands\Controllers;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FillControllerCommand extends Command
{
    protected $signature = 'fill-controller:functions {controller}';
    protected $description = 'Create a controller and replace its content with a custom stub';

    public function handle()
    {
        $controllerName = $this->argument('controller');

        // Define the controller file path
        $controllerPath = app_path('Http/Controllers/Backend/AutoGenerate/' . $controllerName . 'Controller.php');

        // Ensure that the directory exists, create it if necessary
        $controllerDirectory = dirname($controllerPath);
        if (!File::isDirectory($controllerDirectory)) {
            File::makeDirectory($controllerDirectory, 0755, true);
        }

        // Get the stub file path
        $stubPath = base_path('app/Utils/Stubs/controller.stub');

        // Check if the stub file exists
        if (!File::exists($stubPath)) {
            $this->error('Custom stub file not found.');
            return;
        }

        // Read the content of the stub file
        $content = File::get($stubPath);

        // Replace placeholders with actual values
        $content = str_replace('$name', Str::lower($controllerName), $content);
        $content = str_replace('$controller', $controllerName, $content);

        // Create the controller file
        if (File::put($controllerPath, $content) !== false) {
            $this->info('Controller created and content replaced with the custom stub.');
        } else {
            $this->error('Failed to create controller file.');
        }
    }
}
