[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

[![PrimeVue Hero](https://github.com/AnasMubarakYasin/altaqur/blob/74a131162f3aece6fe80e93a282a78dac0da9f8b/public/logo.png?raw=true)](http://altaqur.bladerlaiga.my.id/)

# Al-Taqur

Web search for Tafsir

# Install

```bash
git clone https://github.com/AnasMubarakYasin/altaqur.git
composer i
npm i
php artisan env:decrypt --key=***
php artisan migrate
php artisan migrate:refresh --path=database/migrations/2023_03_04_163917_create_kategories_table.php
php artisan db:seed
php artisan db:seed --class=AlquranSeeder
php artisan db:seed --class=KategorySeeder
```
