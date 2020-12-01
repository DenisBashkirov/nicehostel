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
                'name' => 'Кровать в общем 8-местном номере для мужчин и женщин',
                'slug' => '8-pers-dorm-room-mw',
                'price' => 550,
            ],
            [
                'hostel_id' => 1,
                'name' => 'Кровать в общем 6-местном номере',
                'slug' => '8-pers-dorm-room',
                'price' => 610,
            ],
            [
                'hostel_id' => 1,
                'name' => 'Кровать в общем четырехместном номере',
                'slug' => '6-pers-dorm-room',
                'price' => 850,
            ],
            [
                'hostel_id' => 1,
                'name' => 'Кровать в общем четырехместном номере для женщин',
                'slug' => '4-pers-dorm-room-w',
                'price' => 900,
            ],
            [
                'hostel_id' => 1,
                'name' => 'Четырехместный номер',
                'slug' => '4-pers-room',
                'price' => 2900,
            ],
            [
                'hostel_id' => 1,
                'name' => 'Двухместный номер делюкс с 1 кроватью или 2 отдельными кроватями',
                'slug' => '2-pers-room-deluxe',
                'price' => 3100,
            ],

            [
                'hostel_id' => 2,
                'name' => 'Кровать в общем 6-местном номере для мужчин и женщин',
                'slug' => '8-pers-dorm-room-mw',
                'price' => 850,
            ],
            [
                'hostel_id' => 2,
                'name' => 'Кровать в общем 4-местном номере для мужчин и женщин комфорт',
                'slug' => '4-pers-dorm-room-mw',
                'price' => 1000,
            ],
            [
                'hostel_id' => 2,
                'name' => 'Двухместный номер с 1 кроватью полулюкс',
                'slug' => 'double-room-1-bed',
                'price' => 2500,
            ],

            [
                'hostel_id' => 3,
                'name' => 'Спальное место в общем 6-местном номере для мужчин и женщик',
                'slug' => '6-pers-dorm-room-mw',
                'price' => 500,
            ],
            [
                'hostel_id' => 3,
                'name' => 'Спальное место в общем 6-местном номере для женщин',
                'slug' => '6-pers-dorm-room-w',
                'price' => 550,
            ],
            [
                'hostel_id' => 3,
                'name' => 'Спальное место в общем 6-местном номере для мужчин',
                'slug' => '6-pers-dorm-room-m',
                'price' => 550,
            ],
            [
                'hostel_id' => 3,
                'name' => 'Двухместный номер',
                'slug' => 'double-room',
                'price' => 1500,
            ],
            [
                'hostel_id' => 3,
                'name' => 'Улучшенный двухместный номер',
                'slug' => 'double-room-improved',
                'price' => 1700,
            ],
            [
                'hostel_id' => 3,
                'name' => 'Улучшенный двухместный номер (мансарда)',
                'slug' => 'double-room-improved-attic',
                'price' => 1700,
            ],

            [
                'hostel_id' => 4,
                'name' => 'Кровать в общем номере для мужчин и женщин с 10 кроватями',
                'slug' => '10-pers-dorm-room-mw',
                'price' => 600,
            ],
            [
                'hostel_id' => 4,
                'name' => 'Кровать в общем 8-местном номере для мужчин и женщин',
                'slug' => '8-pers-dorm-room-mw',
                'price' => 600,
            ],
            [
                'hostel_id' => 4,
                'name' => 'Кровать в общем 6-местном номере для мужчин и женщин',
                'slug' => '6-pers-dorm-room-mw',
                'price' => 650,
            ],
            [
                'hostel_id' => 4,
                'name' => 'Кровать в общем 4-местном номере для мужчин и женщин',
                'slug' => '4-pes-dorm-room-mw',
                'price' => 650,
            ],
            [
                'hostel_id' => 4,
                'name' => 'Двухместный номер с 1 кроватью',
                'slug' => 'double-room-1-bed',
                'price' => 1400,
            ],

            [
                'hostel_id' => 5,
                'name' => 'Кровать в общем 12-местном номере для мужчин',
                'slug' => '12-pers-dorm-room-m',
                'price' => 600,
            ],
            [
                'hostel_id' => 5,
                'name' => 'Кровать в общем 12-местном номере для мужчин и женщин',
                'slug' => '12-pers-dorm-room-w',
                'price' => 600,
            ],
            [
                'hostel_id' => 5,
                'name' => 'Кровать в общем 8-местном номере для женщин',
                'slug' => '8-pers-dorm-room-w',
                'price' => 650,
            ],
            [
                'hostel_id' => 5,
                'name' => 'Кровать в общем 8-местном номере для мужчин',
                'slug' => '8-pers-dorm-room-m',
                'price' => 650,
            ],
            [
                'hostel_id' => 5,
                'name' => 'Кровать в общем 8-местном номере для женщин (комфорт)',
                'slug' => '8-pers-dorm-room-w-comfort',
                'price' => 700,
            ],
            [
                'hostel_id' => 5,
                'name' => 'Кровать в общем 8-местном номере для мужчин (комфорт)',
                'slug' => '8-pers-dorm-room-m-comfort',
                'price' => 700,
            ],
            [
                'hostel_id' => 5,
                'name' => 'Двухместный номер с 2 отдельными кроватями',
                'slug' => 'double-room-2-beds',
                'price' => 1850,
            ],
            [
                'hostel_id' => 5,
                'name' => 'Стандартный двухместный номер с 1 кроватью',
                'slug' => 'double-room-1-bed',
                'price' => 1950,
            ],

            [
                'hostel_id' => 6,
                'name' => 'Кровать в общем 8-местном номере для женщин с собственной ванной комнатой',
                'slug' => '8-pres-dorm-room-w-own-bath',
                'price' => 650,
            ],
            [
                'hostel_id' => 6,
                'name' => 'Кровать в общем 8-местном номере для мужчин',
                'slug' => '8-pers-dorm-room-m',
                'price' => 650,
            ],
            [
                'hostel_id' => 6,
                'name' => 'Кровать в общем 6-местном номере для мужчин',
                'slug' => '6-pers-dorm-room-m',
                'price' => 700,
            ],
            [
                'hostel_id' => 6,
                'name' => 'Кровать в общем 6-местном номере для женщин с собственной ванной комнатой',
                'slug' => '6-pers-dorm-room-w-own-bath',
                'price' => 700,
            ],
            [
                'hostel_id' => 6,
                'name' => 'Номер на 2-х человек капсульного типа (без окна!) с собственным санузлом',
                'slug' => 'double-room-own-toilet',
                'price' => 2000,
            ],
            [
                'hostel_id' => 6,
                'name' => 'Семейный vip номер',
                'slug' => 'family-room-vip',
                'price' => 3200,
            ],

            [
                'hostel_id' => 7,
                'name' => 'Кровать в мужском номере на 8 человек',
                'slug' => '8-pers-dorm-room-m',
                'price' => 500,
            ],
            [
                'hostel_id' => 7,
                'name' => 'Кровать в женском номере на 8 человек',
                'slug' => '8-pers-dorm-room-m',
                'price' => 500,
            ],
            [
                'hostel_id' => 7,
                'name' => 'Кровать в общем номере на 8 человек',
                'slug' => '8-pers-dorm-room-mw',
                'price' => 500,
            ],
            [
                'hostel_id' => 7,
                'name' => 'Кровать в мужском номере на 6 человек',
                'slug' => '6-pers-dorm-room-m',
                'price' => 600,
            ],
            [
                'hostel_id' => 7,
                'name' => 'Кровать в женском номере на 6 человек',
                'slug' => '6-pers-dorm-room-w',
                'price' => 600,
            ],
            [
                'hostel_id' => 7,
                'name' => 'Двухместный номер люкс с удобствами',
                'slug' => 'double-room-luxe',
                'price' => 1800,
            ],

            [
                'hostel_id' => 8,
                'name' => 'Номер на 6 человек',
                'slug' => '6-pers-dorm-room-mw',
                'price' => 396,
            ],
            [
                'hostel_id' => 8,
                'name' => '6 местный женский номер',
                'slug' => '6-pers-dorm-room-w',
                'price' => 420,
            ],
            [
                'hostel_id' => 8,
                'name' => 'Номер на 4 человек',
                'slug' => '4-pers-dorm-room-mw',
                'price' => 630,
            ],
            [
                'hostel_id' => 8,
                'name' => 'Стандартный номер с двухспальной кроватью',
                'slug' => 'double-room-1-bed',
                'price' => 1890,
            ],
            [
                'hostel_id' => 8,
                'name' => 'Двухместный номер с 2 отдельными кроватями',
                'slug' => 'double-room-2-beds',
                'price' => 1890,
            ],
            [
                'hostel_id' => 8,
                'name' => 'Семейный номер',
                'slug' => 'family-room',
                'price' => 2375,
            ],
        ];

        DB::table('rooms')->insert($rooms);
    }
}
