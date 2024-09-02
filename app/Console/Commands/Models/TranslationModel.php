<?php

namespace App\Console\Commands\Models;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TranslationModel extends Command
{
    protected $signature = 'translation-model {model}';
    protected $description = 'Create a translation model and migration based on the provided argument.';

    public function handle()
    {
        $modelName = $this->argument('model');
        $modelName = ucfirst($modelName);
        $mainModelName = Str::snake($modelName);
        $tableName = $mainModelName . '_translations';

        // Prepare directory paths
        $modelDirectoryPath = app_path('Models/AutoGenerate');
        $migrationDirectoryPath = database_path('migrations');

        // Create the model directory if it doesn't exist
        if (!File::isDirectory($modelDirectoryPath)) {
            File::makeDirectory($modelDirectoryPath, 0755, true, true);
        }

        // Prepare file paths
        $modelPath = $modelDirectoryPath . '/' . $modelName . 'Translation.php';
        $stubModelPath = base_path('app/Utils/Stubs/models/translation.stub');
        $migrationStubPath = base_path('app/Utils/Stubs/migrations/translation.stub');

        // Check if the custom stub files exist
        if (!File::exists($stubModelPath) || !File::exists($migrationStubPath)) {
            $this->error('Custom stub file(s) not found.');
            return;
        }

        // Read the stub contents
        $modelContent = File::get($stubModelPath);
        $migrationContent = File::get($migrationStubPath);

        // Replace placeholders with actual values in the model stub
        $migrationContent = str_replace('$modelName_id', Str::snake($modelName) . '_id', $migrationContent);
        $modelContent = str_replace('$name', Str::lower($modelName), $modelContent);
        $modelContent = str_replace('$controller', $modelName, $modelContent);
        $modelContent = str_replace('$tableName', Str::snake($modelName), $modelContent);

        // Create the model file
        File::put($modelPath, $modelContent);

        // Replace placeholders with actual values in the migration stub
        $migrationContent = str_replace('{$tableName}', $tableName, $migrationContent);
        $migrationContent = str_replace('{$mainModelName}', $mainModelName, $migrationContent);
        $migrationContent = str_replace('CreateTable', 'Create' . Str::studly($tableName), $migrationContent);

        // Generate migration file name
        $migrationFileName = date('Y_m_d_His') . '_create_' . Str::snake($tableName) . '_table.php';
        $migrationFilePath = $migrationDirectoryPath . '/' . $migrationFileName;

        // Create the migration file
        File::put($migrationFilePath, $migrationContent);

        $this->info($modelName . ' translation model and migration created successfully.');
    }
}
