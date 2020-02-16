<?php

namespace App\Providers;

use App\Repository\EmployeeRepository;
use App\Repository\EmployeeRepositoryInterface;
use App\Service\EmployeeService;
use App\Service\EmployeeServiceInterface;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
