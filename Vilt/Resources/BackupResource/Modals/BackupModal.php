<?php


namespace Modules\Backup\Vilt\Resources\BackupResource\Modals;

use Modules\Base\Services\Components\Base\Action;
use Modules\Base\Services\Components\Modals;
use Modules\Base\Services\Rows\Toggle;

class BackupModal extends Modals
{
    public function setup(): void
    {
        $this->name("backup");
        $this->label(__('Create New Backup'));
        $this->rows([
            Toggle::make('db')->label(__('Database'))->color('primary'),
            Toggle::make('files')->label(__('Files'))->color('primary'),
            Toggle::make('database_files')->label(__('Database & Files'))->color('primary'),
        ]);
        $this->buttons([
            Action::make('submit')->label(__('Create Backup'))->action('backups.backup'),
        ]);
    }
}

