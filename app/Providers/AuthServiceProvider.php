<?php

namespace App\Providers;

use App\Models\School;
use App\Traits\ImageTrait;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    use ImageTrait;
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        view()->composer('*', function($view)
        {
            if (auth()->guard('site')->user()) {
                $user = auth()->guard('site')->user();
                $userSchools = $user->childrens()->get('school_id')->toArray();

                $allSchools = School::with('products')->whereIn('id' , $userSchools)->get()->map(function ($query){
                    $query->image = $this->get_image( $query->logo, 'schools');

                    return $query;
                });

                $view->with('allSchools', $allSchools);
            }
        });
    }
}
