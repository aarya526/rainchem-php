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

            $specificCategoryName = ['Food Safety & Kitchen Hygiene', 'House Keeping & Building Care', 'Commercial Laundering & Fabric Care'];
            $specificCategories = Category::where('isActive', 1)->whereIn('categoryName', $specificCategoryName)->get();
            $otherCategories = Category::where('isActive', 1)->whereNotIn('categoryName', $specificCategoryName)->get();
            $view->with('specificCategories', $specificCategories);
            $view->with('otherCategories', $otherCategories);
        });
    }
}
