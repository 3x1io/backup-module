<?php


namespace Modules\Backup\Vilt\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Backup\Entities\BackupDestination;
use Modules\Backup\Jobs\CreateBackupJob;
use Modules\Backup\Vilt\Resources\BackupResource\Traits\Methods;
use Modules\Base\Services\Components\Base\Alert;
use Modules\Base\Services\Components\Base\Form as FormComponent;
use Modules\Base\Services\Resource\Resource;
use Modules\Backup\Vilt\Resources\BackupResource\Traits\Translations;
use Modules\Backup\Vilt\Resources\BackupResource\Traits\Components;

use Modules\Base\Services\Rows\Text;
use Modules\Base\Services\Rows\Color;
use Modules\Base\Services\Rows\DateTime;
use Modules\Base\Services\Rows\Time;
use Modules\Base\Services\Rows\Date;
use Modules\Base\Services\Rows\Email;
use Modules\Base\Services\Rows\Tel;
use Modules\Base\Services\Rows\Number;
use Modules\Base\Services\Rows\Toggle;
use Modules\Base\Services\Rows\Schema;
use Modules\Base\Services\Rows\Textarea;
use Modules\Base\Services\Rows\Rich;
use Spatie\Backup\BackupDestination\Backup;
use Spatie\Backup\BackupDestination\BackupDestination as SpatieBackupDestination;
use Symfony\Component\HttpFoundation\Response;


class BackupResource extends Resource
{
    use Translations,Components, Methods;

    public ?string $model = BackupDestination::class;
    public ?string $icon = "bx bxs-backpack";
    public ?string $group = "Settings";
    public ?string $module = "Backup";
    public ?bool $api = true;

    public function rows():array
    {
        $this->canCreate = false;
        $this->canView = false;
        $this->canViewAny = false;
        $this->canEdit = false;

        return [
            Text::make('id')
                ->sortable(false)
                ->label(__('SN')),
            Text::make('path')
                ->sortable(false)
                ->label(__('Path')),
            Text::make('disk')
                ->sortable(false)
                ->badge()
                ->color('primary')
                ->label(__('Disk')),
            DateTime::make('date')
                ->sortable(false)
                ->label(__('Date')),
            Text::make('size')
                ->sortable(false)
                ->label(__('Size')),
        ];
    }
}
