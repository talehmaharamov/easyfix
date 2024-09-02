<?php

namespace App\Console\Commands\Models;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MainModel extends Command
{
    protected $signature = 'main-model {model}';
    protected $description = 'Create a main model and migration based on the provided argument.';

    public function handle()
    {
        $modelName = $this->argument('model');
        $modelName = ucfirst($modelName);
        $tableName = Str::snake($modelName);
        $migrationName = Str::snake($modelName);

        // Prepare directory paths
        $modelDirectoryPath = app_path('Models/AutoGenerate');
        $migrationDirectoryPath = database_path('migrations');

        // Create the model directory if it doesn't exist
        if (!File::isDirectory($modelDirectoryPath)) {
            File::makeDirectory($modelDirectoryPath, 0755, true, true);
        }

        // Prepare file paths
        $modelPath = $modelDirectoryPath . '/' . $modelName . '.php';
        $stubModelPath = base_path('app/Utils/Stubs/models/main.stub');
        $migrationStubPath = base_path('app/Utils/Stubs/migrations/main_migration.stub');

        // Check if the custom stub files exist
        if (!File::exists($stubModelPath) || !File::exists($migrationStubPath)) {
            $this->error('Custom stub file(s) not found.');
            return;
        }

        // Read the stub contents
        $modelContent = File::get($stubModelPath);
        $migrationContent = File::get($migrationStubPath);

        // Replace placeholders with actual values in the model stub
        $modelContent = str_replace('$name', Str::lower($modelName), $modelContent);
        $modelContent = str_replace('$controller', $modelName, $modelContent);
        $modelContent = str_replace('$tableName', $tableName, $modelContent);

        // Create the model file
        File::put($modelPath, $modelContent);

        // Replace placeholders with actual values in the migration stub
        $migrationContent = str_replace('{$tableName}', $tableName, $migrationContent);
        $migrationContent = str_replace('CreateTable', 'Create' . Str::studly($tableName), $migrationContent);

        // Generate migration file name
        $migrationFileName = date('Y_m_d_His') . '_create_' . $migrationName . '_table.php';
        $migrationFilePath = $migrationDirectoryPath . '/' . $migrationFileName;

        // Create the migration file
        File::put($migrationFilePath, $migrationContent);

        $this->info($modelName . ' model and migration created successfully.');
    }
}
