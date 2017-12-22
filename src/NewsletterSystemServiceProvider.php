<?php
namespace newsletter\newslettersystem;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class NewsletterSystemServiceProvider extends ServiceProvider
{
    
    public function boot(Dispatcher $events)
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'newsletter');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');


        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/newsletter'),
        ],'newsletter-views');

        $this->publishes([
            __DIR__ . '/migrations' => database_path('migrations'),
        ], 'newsletter-migrations');


        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add([
                'icon' => 'file',
                'text' => 'Newsletter',
                'url'  => route('admin.newsletter'),
            ]);
        });

    }

  
    public function register()
    {
        $this->app->make('newsletter\newslettersystem\NewsletterController');

    }
}
