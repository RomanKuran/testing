<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            'tests_group_id' => '1',
            'name' => 'Чи може площа ортоганальної проекції прямокутника дорівнювати площі прямокутника?',
            'type' => 'test',
            'tests' => '{"a":"Ні","b":"Так"}',
            'answers' => '{"answers":["b"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '1',
            'name' => 'Чи може кут між двома площинами дорівнювати 110°?',
            'type' => 'test',
            'tests' => '{"a":"Ні","b":"Так"}',
            'answers' => '{"answers":["a"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '1',
            'name' => 'Кутом між двома прямими, що перетинаються називають …',
            'type' => 'test',
            'tests' => '{"a":"більший з кутів, що утворився","b":"менший з кутів, що утворився"}',
            'answers' => '{"answers":["b"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '1',
            'name' => 'З точки до площини проведено перпендикуляр і похила. Знайдіть кут, який утворює похила з площиною, якщо кут між перпендикуляром і похилою дорівнює 50°.',
            'type' => 'test',
            'tests' => '{"a":"130°","b":"50°","c":"40°","d":"60°","f":"45°","j":"45°"}',
            'answers' => '{"answers":["c"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '1',
            'name' => 'Чи може кут між прямою і площиною дорівнювати 85°?',
            'type' => 'test',
            'tests' => '{"a":"Ні","b":"Так"}',
            'answers' => '{"answers":["b"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '1',
            'name' => 'Похила проведена до площини дорівнює 32 см а її проекція дорівнює 16 см. Знайдіть кут між похилою та площиною.',
            'type' => 'test',
            'tests' => '{"a":"30°","b":"45°","c":"60°","d":"90°","e":"120°"}',
            'answers' => '{"answers":["c"]}',
            'is_deleted' => '0',
        ]);





        DB::table('tests')->insert([
            'tests_group_id' => '3',
            'name' => 'Яблуко коштує 1.15, апельсин коштує 2.30. Скільки коштують вони разом - чому дорівнює сума 1.15 + 2.30 з точки зору JavaScript?',
            'type' => 'test',
            'tests' => '{"a":"345","b":"3.45","c":"3,45","d":"Жоден з варіантів вище."}',
            'answers' => '{"answers":["d"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '3',
            'name' => 'Чому дорівнює 0 || "" || 2 || undefined || true || falsе?',
            'type' => 'test',
            'tests' => '{"a":"0","b":"2","c":"undefined","d":"true"}',
            'answers' => '{"answers":["b"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '3',
            'name' => 'Чому дорівнює typeof null в режимі use strict?',
            'type' => 'test',
            'tests' => '{"a":"null","b":"undefined","c":"object","d":"string"}',
            'answers' => '{"answers":["c"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '3',
            'name' => 'Чи вірно порівняння: "ёжик" > "яблоко"?',
            'type' => 'test',
            'tests' => '{"a":"Так","b":"Ні.","c":"Залежить від локальних налаштувань браузера."}',
            'answers' => '{"answers":["a"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '3',
            'name' => 'Чи є різниця між викликами i++і ++i?',
            'type' => 'test',
            'tests' => '{"a":"Різниця в значенні, яке повертає такий виклик.","b":"Різниця в значенні i після виклику.","c":"Нема ніякої різниці."}',
            'answers' => '{"answers":["a"]}',
            'is_deleted' => '0',
        ]);




        DB::table('tests')->insert([
            'tests_group_id' => '4',
            'name' => 'Традиційне використання якого пристрою полягає у керованому передаванні даних від кількох вхідних каналів в один вихідний канал?',
            'type' => 'test',
            'tests' => '{"a":"Демультиплексора","b":"Мультиплексора","c":"Компаратора","d":"Дешифратора"}',
            'answers' => '{"answers":["b"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '4',
            'name' => 'Який комбінаційний пристрій, призначений для перетворення чисел із двійкової системи числення в одиничну позиційну систему числення?',
            'type' => 'test',
            'tests' => '{"a":"Шифратор","b":"Дешифратор","c":"Мультиплексор","d":"Демультиплексор"}',
            'answers' => '{"answers":["b"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '4',
            'name' => 'Стан прямого виходу JK-тригера Q = 1. Визначте стан цього виходу, якщо на входах J=K сигнал логічної одиниці, і на вхід С подано сигнал логічної одиниці.',
            'type' => 'test',
            'tests' => '{"a":"Стан логічної 1.","b":"Така комбінація вхідних сигналів на допускається.","c":"Стан логічного 0."}',
            'answers' => '{"answers":["c"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '4',
            'name' => 'Яка формула відповідає коефіцієнту підсилення за напругою?',
            'type' => 'test',
            'tests' => '{"a":"Ku = Uвх / Івих","b":"Ku = Uвх / Uвих","c":"Ku = Uвих / Uвх"}',
            'answers' => '{"answers":["c"]}',
            'is_deleted' => '0',
        ]);
        DB::table('tests')->insert([
            'tests_group_id' => '4',
            'name' => 'На вхід послідовного чотирирозрядного регістра подається двійкове число 1011010111. Яке число буде записане у регістрі через три такти?',
            'type' => 'test',
            'tests' => '{"a":"111","b":"1110","c":"1010"}',
            'answers' => '{"answers":["c"]}',
            'is_deleted' => '0',
        ]);
    }
}
