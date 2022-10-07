<?php

namespace Modules\Backup\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Backup\Services\SpatieLaravelBackup;
use Sushi\Sushi;

class BackupDestinationStatus extends Model
{
    use Sushi;

    protected array $rows;

    public function getRows(): array
    {
        $this->rows = SpatieLaravelBackup::getBackupDestinationStatusData();
        return  $this->rows;
    }
}
