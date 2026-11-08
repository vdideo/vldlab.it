#!/bin/bash

PHP=/usr/bin/php8.4

# metto l'applicazione in modalità manutenzione
"$PHP" artisan down

# Pull delle ultime modifiche dal repository
git pull origin main

"$PHP" "$(command -v composer)" install --no-dev --optimize-autoloader --no-interaction

npm install
npm run build

# tolgo la modalità manutenzione
"$PHP" artisan up

# pulizia cache
"$PHP" artisan cache:clear

# metto in cache le config, le route e le view
"$PHP" artisan optimize:clear
"$PHP" artisan optimize
