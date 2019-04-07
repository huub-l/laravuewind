<?php

namespace bradlockhart\laravuewind;

use bradlockhart\laravuewind\LaravuewindPreset;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class LaravuewindServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('laravuewind', function ($command) {
            LaravuewindPreset::install();
            $command->info('Laravuewind preset installed.' . PHP_EOL . 'Next:' . PHP_EOL . '1. npm install' . PHP_EOL . '2. Compile your assets (npm run dev / watch / prod)');
        });
    }
}
