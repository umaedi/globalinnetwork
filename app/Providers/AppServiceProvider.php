<?php

namespace App\Providers;

use App\Models\Subdomain;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
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
        $subdomain = request()->subdomain ?? config('app.url');
        view()->composer('*', function ($view) use ($subdomain) {
            $menus = Cache::rememberForever('menus_' . $subdomain, function () use ($subdomain) {
                return \App\Models\Menu::where('subdomain', $subdomain)
                    ->with('submenu')
                    ->get();
            });
    
            // $view->with('menus', $menus);

           // Batasan limit jumlah menu hanya untuk desktop, tidak untuk mobile/tablet
            $maxVisibleMenus = 6;
            $visibleMenus = $menus->take($maxVisibleMenus);
            $extraMenus = $menus->slice($maxVisibleMenus);

            $view->with('menus', $menus)
             ->with('visibleMenus', $visibleMenus)
             ->with('extraMenus', $extraMenus);
        });

        view()->composer('*', function ($view) {
            $pengaturan = Cache::rememberForever('pengaturan_' . request()->subdomain, function () {
                return \App\Models\Pengaturan::where('subdomain', request()->subdomain)->first();
            });
        
            $view->with('pengaturan', $pengaturan);
        });

        view()->composer('*', function($view) {
            $subdomains = Subdomain::where('status', 'active')->get();
            return $view->with('subdomains', $subdomains);
        });
    }
}