<?php

use Illuminate\Database\Seeder;

class HostelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'city' => 'Москва',
                'address' => 'г. Москва, ул. Земляной вал, 38-40с5',
                'route' => '/moscow/zemlyanoy-val',
                'phone' => '+7(985)986-60-13',
                'email' => 'kurskaya@nicehostel.ru'
            ],
            [
                'city' => 'Москва',
                'address' => 'г. Москва, ул. Садовая-Черногрязская, д. 5/9, кв. 1',
                'route' => '/moscow/sadovaya-chernogryazsckaya',
                'phone' => '+7(985)050-00-85',
                'email' => 'red@nicehostel.ru'
            ],
            [
                'city' => 'Иваноно',
                'address' => 'г. Иваново, проспект Ленина, 20',
                'route' => '/ivanovo',
                'phone' => '+7(920)356-83-37',
                'email' => 'ivanovo@nicehostel.ru'
            ],
            [
                'city' => 'Тюмень',
                'address' => 'г. Тюмень, ул. Миусская, д.8/3',
                'route' => '/tumen',
                'phone' => '+7(952)671-60-60',
                'email' => 'tmn-m@nicehostel.ru'
            ],
            [
                'city' => 'Пенза',
                'address' => 'г. Пенза, улица Свердлова, 49',
                'route' => '/penza',
                'phone' => '+7(8412)23-51-15',
                'email' => 'penza@nicehostel.ru'
            ],
            [
                'city' => 'Красногорск',
                'address' => 'г. Красногорск, Ильинский бульвар, д 8',
                'route' => '/krasnogorsk',
                'phone' => '+7(968)7777-550',
                'email' => 'crocus@nicehostel.ru'
            ],
            [
                'city' => 'Рязань',
                'address' => 'г. Рязань, Первомайский проспект, дом 62',
                'route' => '/ryazan',
                'phone' => '+7(4912)983-983',
                'email' => 'ryazan@nicehostel.ru'
            ],
            [
                'city' => 'Сочи',
                'address' => 'г. Сочи, Виноградный переулок, 2а',
                'route' => '/sochi',
                'phone' => '+7(862)233-78-88',
                'email' => 'sochi@nicehostel.ru'
            ],
        ];

        DB::table('hostels')->insert($data);
    }
}
