<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // dd('Data yang akan disimpan:', $data);
        logger('Before save:', $data);
        
        return $data;
    }

    protected function afterSave(): void
    {
        logger('After save - User updated:', $this->record->toArray());
        
        // Uncomment to see after save data
        // dd('User berhasil diupdate:', $this->record->toArray());
    }
}
