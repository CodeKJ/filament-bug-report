<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Filament\Resources\UserResource\Pages\ListUsers;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserOverview extends BaseWidget
{
    use InteractsWithPageTable;

    protected function getStats(): array
    {
        $total = $this->getPageTableQuery()->count();

        return [
            Stat::make('total', $total),
//            Stat::make('total2', $total),
        ];
    }

    protected function getTablePage(): string
    {
        return ListUsers::class;
    }
}
