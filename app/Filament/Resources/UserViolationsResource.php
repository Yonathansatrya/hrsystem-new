<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserViolationsResource\Pages;
use App\Filament\Resources\UserViolationsResource\RelationManagers;
use App\Models\UserViolations;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserViolationsResource extends Resource
{
    protected static ?string $model = UserViolations::class;
    protected static ?string $pluralModelLabel = 'Pelanggaran Pegawai';
    protected static ?string $navigationIcon = 'heroicon-m-exclamation-triangle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),

                Forms\Components\Select::make('violation_type')
                    ->options([
                        'terlambat' => 'Terlambat',
                        'tidak hadir' => 'Tidak Hadir',
                        'perilaku tidak sesuai' => 'Perilaku Tidak Sesuai',
                    ])
                    ->required(),

                Forms\Components\DatePicker::make('violation_date')
                    ->required(),

                Forms\Components\FileUpload::make('violation_photo')
                    ->label('Foto & Document'),

                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('violation_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('violation_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('violation_photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserViolations::route('/'),
            'create' => Pages\CreateUserViolations::route('/create'),
            'edit' => Pages\EditUserViolations::route('/{record}/edit'),
        ];
    }
}
