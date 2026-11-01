<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LibraryStats extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $available = Book::where('status', 'available')->count();
        $borrowed = Book::where('status', 'borrowed')->count();

        return [
            Stat::make('Total Books', Book::count())
                ->description('Semua buku terdaftar')
                ->descriptionIcon('heroicon-m-book-open')
                ->color('primary'),

            Stat::make('Total Authors', Author::count())
                ->description('Semua penulis terdaftar')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('info'),

            Stat::make('Available / Borrowed', "{$available} / {$borrowed}")
                ->description('Buku tersedia vs dipinjam')
                ->descriptionIcon('heroicon-m-clock')
                ->color('success'),
        ];
    }
}