<?php

namespace App\Filament\Widgets;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Response;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Products', Product::count())
            ->description('No. of Products on the Page')
            ->descriptionIcon('heroicon-o-pencil-square', IconPosition::Before)
            ->chart([40,20,10,4,4,3,4,1])
            ->color('success'),
            Stat::make('Brands', Brand::count())
            ->description('No. of Brands')
            ->descriptionIcon('heroicon-o-pencil-square', IconPosition::Before)
            ->chart([1,4,3,4,4,10,20,40])
            ->color('success'),
            Stat::make('Categories', Category::count())
            ->description('No. of Categories')
            
        ];
    }
}
