<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $testCategory=new Category();
        $testCategory->name="categoria de prueba";
        $testCategory->id=12;
        $testCategory->save();
    }
}
