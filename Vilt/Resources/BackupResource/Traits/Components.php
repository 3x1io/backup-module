<?php


namespace Modules\Backup\Vilt\Resources\BackupResource\Traits;

use Modules\Backup\Vilt\Resources\BackupResource\Actions\BackupAction;
use Modules\Backup\Vilt\Resources\BackupResource\Modals\BackupModal;
use Modules\Backup\Vilt\Resources\BackupResource\Routes\BackupRoute;
use Modules\Backup\Vilt\Resources\BackupResource\Routes\DeleteRoute;
use Modules\Backup\Vilt\Resources\BackupResource\Routes\DownloadRoute;
use Modules\Base\Services\Components\Base\Action;
use Modules\Base\Services\Components\Base\Component;
use Modules\Base\Services\Components\Base\Form;
use Modules\Base\Services\Components\Base\Table;


trait Components
{
    public function components():array
    {
        $components = parent::components();
        return array_merge($components, [
            Component::make(BackupAction::class)->action(),
            Component::make(BackupModal::class)->modal(),
            Component::make(BackupRoute::class)->route(),
            Component::make(DeleteRoute::class)->route(),
            Component::make(DownloadRoute::class)->route()
        ]);
    }

    public function form(): Form
    {
        return Form::make('modal');
    }

    public function table(): Table
    {
        return Table::make('table')->actions([
            Action::make('download')->label(__('Download'))->icon('bx bx-download')->type('primary')->url(url('admin/backups/download')),
        ]);
    }
}
