<?php

namespace App\Filament\Resources\Tujuans\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TujuanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('tujuan')
                    ->label('Tujuan Sekolah')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
