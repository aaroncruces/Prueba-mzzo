# table creations
php artisan make:model Pokemon -m
php artisan make:model Ability-m
php artisan make:migration create_ability_pokemon_table
php artisan migrate
# get the first 100 pokemon
php artisan db:seed