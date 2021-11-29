# table creations
php artisan make:model Pokemon -m
php artisan make:model Category -m
php artisan make:migration create_category_pokemon_table
php artisan migrate