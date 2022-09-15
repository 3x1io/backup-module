<?php

namespace Modules\Backup\Vilt\Resources\BackupResource\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Modules\Backup\Entities\BackupDestination;
use Modules\Backup\Jobs\CreateBackupJob;
use Modules\Base\Services\Components\Base\Alert;
use Spatie\Backup\BackupDestination\Backup;
use Spatie\Backup\BackupDestination\BackupDestination as SpatieBackupDestination;
use Symfony\Component\HttpFoundation\Response;

trait Methods
{
    public function backup(Request $request): void
    {
        $option = "";
        if($request->has('db') && $request->get('db') && !$request->get('database_files')){
            $option = "only-db";
        }
        else if ($request->has('files') && $request->get('files') && !$request->get('database_files')){
            $option = "only-files";
        }

        dispatch(new CreateBackupJob($option))
            ->onQueue(config('backup.queue'))
            ->afterResponse();

        Alert::make(__('Backup Started'))->fire();
    }

    public function download(Request $request, BackupDestination $record): Response
    {
        return Storage::disk($record->disk)->download($record->path);
    }

    public function destory(Request $request, $id)
    {
        $record = BackupDestination::find($id);

        SpatieBackupDestination::create($record->disk, config('backup.backup.name'))
            ->backups()
            ->first(function (Backup $backup) use ($record) {
                return $backup->path() === $record->path;
            })
            ->delete();

        Alert::make(__('Your Back Has Been Deleted'))->fire();
    }
}
