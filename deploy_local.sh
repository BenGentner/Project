#!/bin/bash

# refresh data from git and reset branch
git fetch --all
git checkout dev

# composer
composer install

# env
cp .env.example .env

# key
php artisan key:generate

# migrate migrations and seed database
echo "Do you want to migrate and seed the database (You have to check your .env first and create a database)?"
select yn in "Yes" "No"; do
    case $yn in
        Yes ) php artisan migrate; php artisan db:seed; break;;
        No ) exit;;
    esac
done

#yarn
#yarn dev

