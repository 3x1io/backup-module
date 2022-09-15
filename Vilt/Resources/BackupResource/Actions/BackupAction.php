<?php


namespace Modules\Backup\Vilt\Resources\BackupResource\Actions;

use Modules\Base\Services\Components\Actions;

class BackupAction extends Actions
{
    public function setup(): void
    {
        $this->name("backup");
        $this->label(__('Take Backup'));
        $this->type("success");
        $this->icon("bx bx-plus-circle");
        $this->modal("backup");
        $this->can(true);
    }
}

