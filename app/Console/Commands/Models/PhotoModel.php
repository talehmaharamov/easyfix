<?php
namespace App\Console\Commands\Models;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PhotoModel extends Command
{
    protected $signature = 'photo-model {model}';
    protected $description = 'Create a photo model and migration based on the provided argument.';

    public function handle()
    {
        $modelName = $this->argument('model');
        $modelName = ucfirst($modelName);
        $tableName = Str::snake($modelName);
        $migrationName = Str::snake(Str::plural($modelName)) . '_photos';

        // Prepare directory paths
        $modelDirectoryPath = app_path('Models/AutoGenerate');
        $migrationDirectoryPath = database_path('migrations');

        // Create the directories if they don't exist
        if (!File::isDirectory($modelDirectoryPath)) {
            File::makeDirectory($modelDirectoryPath, 0755, true, true);
        }

        // Prepare file paths
        $modelPath = $modelDirectoryPath . '/' . $modelName . 'Photo.php';
        $stubModelPath = base_path('app/Utils/Stubs/models/photo.stub');
        $migrationStubPath = base_path('app/Utils/Stubs/migrations/photos.stub');

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
        $modelContent = str_replace('$tableName', $tableName, $modelContent); // Replace the tableName placeholder

        // Create the model file
        File::put($modelPath, $modelContent);

        // Replace placeholders with actual values in the migration stub
        $migrationContent = str_replace('{$tableName}', $tableName, $migrationContent);
        $migrationContent = str_replace('$foreignTablePlaceholder', Str::singular(Str::before($migrationName, '_photos')), $migrationContent);
        $migrationContent = str_replace('$foreignColumn', 'parent_id', $migrationContent);
        $migrationContent = str_replace('$onDelete', 'cascade', $migrationContent);
        $migrationContent = str_replace('CreateTable', 'Create' . Str::studly($migrationName), $migrationContent);

        // Generate migration file name
        $migrationFileName = date('Y_m_d_His') . '_create_' . $migrationName . '_table.php';
        $migrationFilePath = $migrationDirectoryPath . '/' . $migrationFileName;

        // Create the migration file
        File::put($migrationFilePath, $migrationContent);

        $this->info($modelName . 'Photo model and migration created successfully.');
    }
}
