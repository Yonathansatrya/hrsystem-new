<?php

namespace App\Filament\Resources\UserViolationsResource\Pages;

use App\Filament\Resources\UserViolationsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserViolations extends ListRecords
{
    protected static string $resource = UserViolationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
