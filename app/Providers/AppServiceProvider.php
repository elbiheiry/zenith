<?php

namespace App\Providers;

use App\Http\Resources\SettingResource;
use App\Models\Setting;
use App\Models\SocialLink;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting = Setting::firstOrFail();
        
        if (!app()->runningInConsole()) {
            view()->share([
                'social_links' => SocialLink::all()->sortByDesc('id'),
                'settings' => (new SettingResource($setting))->resolve(),
            ]);
        }
    }
}
