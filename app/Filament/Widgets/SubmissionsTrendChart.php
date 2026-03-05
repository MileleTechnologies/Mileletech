<?php

namespace App\Filament\Widgets;

use App\Models\CareerApplication;
use App\Models\ContactMessage;
use App\Models\QuoteRequest;
use Filament\Widgets\ChartWidget;

class SubmissionsTrendChart extends ChartWidget
{
    protected ?string $heading = 'Submissions Trend (Last 14 Days)';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $days = 14;
        $labels = [];
        $contactCounts = [];
        $quoteCounts = [];
        $careerCounts = [];

        for ($i = $days - 1; $i >= 0; $i--) {
            $date = now()->startOfDay()->subDays($i);
            $labels[] = $date->format('M d');

            $contactCounts[] = ContactMessage::query()
                ->whereBetween('created_at', [$date, (clone $date)->endOfDay()])
                ->count();

            $quoteCounts[] = QuoteRequest::query()
                ->whereBetween('created_at', [$date, (clone $date)->endOfDay()])
                ->count();

            $careerCounts[] = CareerApplication::query()
                ->whereBetween('created_at', [$date, (clone $date)->endOfDay()])
                ->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Contact Messages',
                    'data' => $contactCounts,
                    'borderColor' => '#2563eb',
                    'backgroundColor' => 'rgba(37, 99, 235, 0.15)',
                ],
                [
                    'label' => 'Quote Requests',
                    'data' => $quoteCounts,
                    'borderColor' => '#f59e0b',
                    'backgroundColor' => 'rgba(245, 158, 11, 0.18)',
                ],
                [
                    'label' => 'Career Applications',
                    'data' => $careerCounts,
                    'borderColor' => '#10b981',
                    'backgroundColor' => 'rgba(16, 185, 129, 0.18)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
