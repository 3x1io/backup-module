<?php


namespace Modules\Backup\Vilt\Resources\BackupResource\Routes;
use Modules\Backup\Vilt\Resources\LogResource;

use Modules\Base\Services\Components\Routes;

class DeleteRoute extends Routes
{
    public function setup(): void
    {
         $this->name('delete');
         $this->type('post');
         $this->method('delete');
         $this->controller(LogResource::class);
         $this->path('delete');
    }
}

