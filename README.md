Laravel clean build with auth + livewire v3 + bootstrap v5.3.3 + internachi/modular
## Команды для запуска приложения если вы его клонировали
```
composer install
composer update
npm install
npm update
php artisan key:generate
php artisan migrate
npm run dev || npm run build
```

## Команды для самостоятельной сборки с нуля без шаблонов авторизации
```
composer create-project laravel/laravel example-app
composer require livewire/livewire
php artisan livewire:publish --config
composer require internachi/modular
npm install -D bootstrap@5.3.3
npm install -D sass
npm i bootstrap-icons
npm i --save bootstrap @popperjs/core
npm install
composer require laravel/ui
```
