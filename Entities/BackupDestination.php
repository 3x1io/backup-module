<?php

namespace Modules\Backup\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Backup\Services\SpatieLaravelBackup;
use Sushi\Sushi;

class BackupDestination extends Model
{
    use Sushi;

    protected $table = 'backups';

    public function getRows(): array
    {
        $data = [];

        foreach (SpatieLaravelBackup::getDisks() as $disk) {
            $data = array_merge($data, SpatieLaravelBackup::getBackupDestinationData($disk));
        }

        return $data;
    }
}
