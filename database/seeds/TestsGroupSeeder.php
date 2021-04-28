<?php

use Illuminate\Database\Seeder;

class TestsGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests_groups')->insert([
            'category_id' => '1',
            'name' => 'Вимірювання кутів у просторі',
            'is_deleted' => '0',
        ]);
        DB::table('tests_groups')->insert([
            'category_id' => '1',
            'name' => 'Двогранний кут. Перпендикулярність площин.',
            'is_deleted' => '0',
        ]);
        DB::table('tests_groups')->insert([
            'category_id' => '2',
            'name' => 'Мова JavaScript',
            'is_deleted' => '0',
        ]);
        DB::table('tests_groups')->insert([
            'category_id' => '3',
            'name' => 'Електротехніка і електроніка',
            'is_deleted' => '0',
        ]);
    }
}
