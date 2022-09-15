<?php


namespace Modules\Backup\Vilt\Resources\BackupResource\Routes;
use Modules\Backup\Vilt\Resources\LogResource;

use Modules\Base\Services\Components\Routes;

class BackupRoute extends Routes
{
    public function setup(): void
    {
         $this->name('backup');
         $this->type('post');
         $this->method('backup');
         $this->controller(LogResource::class);
         $this->path('backup');
    }
}

