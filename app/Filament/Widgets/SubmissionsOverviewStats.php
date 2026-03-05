<?php

namespace App\Filament\Widgets;

use App\Models\CareerApplication;
use App\Models\ContactMessage;
use App\Models\QuoteRequest;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SubmissionsOverviewStats extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $since = now()->subDays(7);

        return [
            Stat::make('Contact Messages (7d)', ContactMessage::query()->where('created_at', '>=', $since)->count())
                ->description('Last 7 days')
                ->color('primary'),
            Stat::make('Quote Requests (7d)', QuoteRequest::query()->where('created_at', '>=', $since)->count())
                ->description('Last 7 days')
                ->color('warning'),
            Stat::make('Career Applications (7d)', CareerApplication::query()->where('created_at', '>=', $since)->count())
                ->description('Last 7 days')
                ->color('success'),
        ];
    }
}
