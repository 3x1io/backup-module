<?php


namespace Modules\Backup\Vilt\Resources\BackupResource\Routes;
use Modules\Backup\Vilt\Resources\BackupResource;

use Modules\Base\Services\Components\Routes;

class DownloadRoute extends Routes
{
    public function setup(): void
    {
         $this->name('download');
         $this->type('get');
         $this->method('download');
         $this->controller(BackupResource::class);
         $this->path('download/{record}');
    }
}

