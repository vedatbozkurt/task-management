<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-12 16:17:26
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-12 16:49:29
 */

namespace VedatBozkurt\TaskManagement;

use Illuminate\Support\ServiceProvider;

class TaskManagementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'task-management');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'task-management');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('task-management.php'),
            ], 'config');

            // php artisan vendor:publish --provider="VedatBozkurt\TaskManagement\TaskManagementServiceProvider" --tag="migrations"
            if (! class_exists('CreateTasksTable')) {
                $this->publishes([
                  __DIR__ . '/../database/migrations/create_tasks_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_tasks_table.php'),
                ], 'migrations');
            }

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/task-management'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/task-management'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/task-management'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'task-management');

        // Register the main class to use with the facade
        $this->app->singleton('task-management', function () {
            return new TaskManagement;
        });
    }
}
