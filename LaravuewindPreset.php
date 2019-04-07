<?php

namespace bradlockhart\laravuewind;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as Preset;


class LaravuewindPreset extends Preset
{
    public static function install()
    {
        static::updatePackages();
        static::increaseSchemaStrLength();
        static::twInit();
        static::updateCss();
        static::updateMix();
        static::updateScripts();
        static::updateExampleVue();
        static::updateWelcomeBlade();
    }

    public static function updatePackageArray($packages)
    {
        return array_merge([
            "tailwindcss" => "^0.7.4",
            "vue-template-compiler" => "^2.6.9",
            "laravel-mix-purgecss" => "^4.1.0",
        ], Arr::except($packages, [
            'bootstrap',
            'jquery',
            'popper.js',
            'sass',
            'sass-loader',
        ]));
    }

    public static function increaseSchemaStrLength()
    {
        File::copy(__DIR__ . '/stubs/AppServiceProvider.php', app_path('Providers/AppServiceProvider.php'));
    }

    public static function twInit()
    {
        File::copy(__DIR__ . '/stubs/tailwind.js', base_path('tailwind.js'));
    }

    public static function updateCss()
    {
        File::deleteDirectory(resource_path('sass'));
        File::copyDirectory(__DIR__ . '/stubs/css', resource_path('css'));
    }

    public static function updateMix()
    {
        File::copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    public static function updateScripts()
    {
        File::copy(__DIR__ . '/stubs/app.js', resource_path('js/app.js'));
        File::copy(__DIR__ . '/stubs/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    public static function updateExampleVue()
    {
        File::copy(__DIR__ . '/stubs/ExampleComponent.vue', resource_path('js/components/ExampleComponent.vue'));
    }

    public static function updateWelcomeBlade()
    {
        File::copy(__DIR__ . '/stubs/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }
}
