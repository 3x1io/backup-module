<?php


namespace Modules\Backup\Vilt\Resources\BackupResource\Traits;

trait Translations
{
    public function loadTranslations(): array
    {
        return [
            "index" => __(" Backups"),
            "create" => __('Create ' . " Backup"),
            "bulk" => __('Delete Selected ' . " Backup"),
            "edit_title" => __('Edit ' . " Backup"),
            "create_title" => __('Create New ' . " Backup"),
            "view_title" => __('View ' . " Backup"),
            "delete_title" => __('Delete ' . " Backup"),
            "bulk_title" => __('Run Bulk Action To ' . " Backup"),
        ];
    }
}

