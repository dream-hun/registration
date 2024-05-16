<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Student;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Students', Student::count())
                ->description('Total number of all students in all trades')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('warning'),
            Stat::make('Male students', Student::where('gender','==','male')->count())
                ->description('Total number of Male students')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('info'),
            Stat::make('Female students', Student::where('gender','==','female')->count())
                ->description('Total number of Female students')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
        ];
    }
}
