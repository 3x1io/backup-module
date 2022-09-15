<?php


namespace Modules\Backup\Vilt\Resources\BackupResource\Routes;
use Modules\Backup\Vilt\Resources\LogResource;

use Modules\Base\Services\Components\Routes;

class DownloadRoute extends Routes
{
    public function setup(): void
    {
         $this->name('download');
         $this->type('get');
         $this->method('download');
         $this->controller(LogResource::class);
         $this->path('download/{record}');
    }
}

