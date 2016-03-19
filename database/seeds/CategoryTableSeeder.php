<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Tareas']);
        Category::create(['name' => 'Recordatorios']);
        Category::create(['name' => 'Recursos']);
        Category::create(['name' => 'Eventos']);
    }
}
