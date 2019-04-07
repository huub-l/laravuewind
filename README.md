# Laravuewind

A clean Laravel preset for rapid Laravel, Vue, Tailwind CSS setup.

Stubs - 

```
app.css - Tailwind injections.
bootstrap.js - Laravel default lodash, axios, and csrf setup.
app.js - Laravel default Vue setup.
ExampleComponent.vue - Simple Vue example component.
tailwind.js - Tailwind initialisation.
welcome.blade.php - Stubbed to render ExampleComponent.vue.
webpack.mix.js - Stubbed to mix JavaScript, CSS, Tailwind, and Purgecss.
AppServiveProvider.php - Stubbed to fix the Schema string length migration error.
(Note: Default sass folder is deleted).
```

package.json - 

Includes:
```
axios
cross-env
laravel-mix
lodash
resolve-url-loader
vue
vue-template-compiler
tailwindcss
laravel-mix-purgecss
```


Removes:
```
bootstrap
jquery
popper
sass
sass-loader
```

## Prerequisites

This package assumes a fresh Laravel installation - with the default preset.

### Installing

Change Directory into your fresh Laravel installation:


Composer require the laravuewind package:

```
composer require bradlockhart/laravuewind
```


Run the artisan command to install it: 
```
php artisan preset laravuewind
```


Run npm install to update your packages:
```
npm i
```


Compile your assets:
```
npm run dev
```
or

```
npm run watch
```
or

```
npm run prod
```


*Enjoy*

## Built With

* [Laravel](https://laravel.com/)
* [Vue.js](https://vuejs.org/)
* [Tailwind CSS](https://tailwindcss.com/)

## Authors

* [BradLockhart](https://github.com/BradLockhart)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Hat Tips

* Taylor Otwell
* Evan You
* Adam Wathan