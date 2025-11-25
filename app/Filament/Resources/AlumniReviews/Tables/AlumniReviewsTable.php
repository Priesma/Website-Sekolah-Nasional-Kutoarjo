<?php

namespace App\Filament\Resources\AlumniReviews\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class AlumniReviewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_alumni')
                    ->label('Nama Alumni')
                    ->searchable(),
                TextColumn::make('tahun_lulus')
                    ->label('Tahun Lulus'),
                TextColumn::make('pekerjaan')
                    ->label('Pekerjaan')
                    ->searchable(),
                ImageColumn::make('foto')->label('Foto Alumni')->disk('public')->size(80),
                TextColumn::make('kesan')
                    ->limit(120)
                    ->wrap()
                    ->sortable(false)
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                    ->label('Hapus Terpilih'),
                ]),
            ]);
    }
}
