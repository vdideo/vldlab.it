#!/bin/bash

# metto l'applicazione in modalità manutenzione
php artisan down

# Pull delle ultime modifiche dal repository
git pull origin main

composer install --no-dev --optimize-autoloader --no-interaction

npm install
npm run build

# tolgo la modalità manutenzione
php artisan up

# pulizia cache
php artisan cache:clear

# metto in cache le config, le route e le view
php artisan optimize:clear
php artisan optimize
