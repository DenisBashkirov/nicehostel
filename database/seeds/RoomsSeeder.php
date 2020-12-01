<?php

use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'hostel_id' => 1,
                'name' => 'КРОВАТЬ В ОБЩЕМ 8-МЕСТНОМ НОМЕРЕ ДЛЯ МУЖЧИН И ЖЕНЩИН',
                'slug' => '8-pers-dorm-room-mw',
                'price' => 550,
            ],
            [
                'hostel_id' => 1,
                'name' => 'КРОВАТЬ В ОБЩЕМ 6-МЕСТНОМ НОМЕРЕ',
                'slug' => '8-pers-dorm-room',
                'price' => 610,
            ],
            [
                'hostel_id' => 1,
                'name' => 'КРОВАТЬ В ОБЩЕМ ЧЕТЫРЕХМЕСТНОМ НОМЕРЕ',
                'slug' => '6-pers-dorm-room',
                'price' => 850,
            ],
            [
                'hostel_id' => 1,
                'name' => 'КРОВАТЬ В ОБЩЕМ ЧЕТЫРЕХМЕСТНОМ НОМЕРЕ ДЛЯ ЖЕНЩИН',
                'slug' => '4-pers-dorm-room-w',
                'price' => 900,
            ],
            [
                'hostel_id' => 1,
                'name' => 'ЧЕТЫРЕХМЕСТНЫЙ НОМЕР',
                'slug' => '4-pers-room',
                'price' => 2900,
            ],
            [
                'hostel_id' => 1,
                'name' => 'ДВУХМЕСТНЫЙ НОМЕР ДЕЛЮКС С 1 КРОВАТЬЮ ИЛИ 2 ОТДЕЛЬНЫМИ КРОВАТЯМИ',
                'slug' => '2-pers-room-deluxe',
                'price' => 3100,
            ],
        ];

        DB::table('rooms')->insert($rooms);
    }
}
