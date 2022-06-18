<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

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
    public function boot(Dispatcher $events)
    {
			$events->listen(BuildingMenu::class, function (BuildingMenu $event) {

				$event->menu->add([
						'text' => 'Ubah Password',
						'url' => 'home/profile/edit/' . Auth::user()->id,
						'icon' => 'fas fa-key',
				]);
			});

			Paginator::useBootstrap();
    }
}
