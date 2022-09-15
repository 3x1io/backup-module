<?php

namespace Modules\Backup\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Backup\Services\SpatieLaravelBackup;
use Sushi\Sushi;

class BackupDestinationStatus extends Model
{
    use Sushi;

    public function getRows(): array
    {
        return SpatieLaravelBackup::getBackupDestinationStatusData();
    }
}
