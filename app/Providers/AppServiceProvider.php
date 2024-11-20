<?php

namespace App\Providers;

use App\Models\category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->composer('*', function ($view) {

            $specificCategoryName = ['Food Safety and Kitchen Hygiene', 'House Keeping and Building Care', 'Commercial Laundering and Fabric Care'];
            $specificCategories = Category::whereIn('categoryName', $specificCategoryName)->get();
            $otherCategories = Category::whereNotIn('categoryName', $specificCategoryName)->get();
            $view->with('specificCategories', $specificCategories);
            $view->with('otherCategories', $otherCategories);
        });
    }
}
