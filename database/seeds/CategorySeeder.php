<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Геометрія',
            'is_deleted' => '0',
        ]);
        DB::table('categories')->insert([
            'name' => 'Програмування',
            'is_deleted' => '0',
        ]);
        DB::table('categories')->insert([
            'name' => 'Електроніка',
            'is_deleted' => '0',
        ]);
    }
}
