<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapVendorApiRoutes();

         $this->mapCompanyApiRoutes();

        $this->mapEcommerceAdminWebRoutes();

        $this->mapEcommerceWebRoutes();
        
        $this->mapJobAdminWebRoutes();

        $this->mapJobWebRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }
    protected function mapEcommerceAdminWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->prefix('ecommerce/admin')
            ->group(base_path('routes/e-admin.php'));
    }
    protected function mapEcommerceWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->prefix('ecommerce')
            ->group(base_path('routes/ecommerce.php'));
    }
    protected function mapJobAdminWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->prefix('jobs/admin')
            ->group(base_path('routes/j-admin.php'));
    }
    protected function mapJobWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->prefix('jobs')
            ->group(base_path('routes/job.php'));
    }   

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapVendorApiRoutes()
    {
        Route::prefix('api/vendor')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api-vendor.php'));
    }

     protected function mapCompanyApiRoutes()
    {
        Route::prefix('api/company')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api-company.php'));
    }
    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
