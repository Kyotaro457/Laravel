<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
                'name' => 'books',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'category_id' => id(),
         ]);
    }
}
