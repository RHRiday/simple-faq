<?php

namespace Rifat\SimpleFaq\Providers;

use Illuminate\Support\ServiceProvider;
use Rifat\SimpleFaq\View\Components\Dashboard;
use Rifat\SimpleFaq\View\Components\Faqs;
use Rifat\SimpleFaq\View\Components\Modal;
use Rifat\SimpleFaq\View\Components\Notifier;

class FaqServiceProvider extends ServiceProvider {
    public function register()
    {
        // $this->app->bind('faq', Faq::class);
    }

    public function boot()
    {
        $this->registerRresource();
    }

    private function registerRresource() {
        $this->loadRoutesFrom       (__DIR__ . '/../Http/routes.php');
        $this->loadMigrationsFrom   (__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom        (__DIR__ . '/../../resources/views', 'faq');
        $this->loadViewComponentsAs ('faq',[
            Dashboard::class,
            Faqs::class,
            Modal::class,
            Notifier::class,
        ]);
        $this->publishes([
            __DIR__.'/../../resources/public' => public_path(),
        ], 'public');
    }
}

?>