<?php

namespace Database\Seeders;

use App\Event;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Arrays;
use PhpParser\Node\Expr\Cast\Object_;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataEvent = [
            [
                'nama' => 'Webinar Nasional : Berbakti Kepada Orang Tua',
                'alamat' => 'https://meet.google.com/',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-one.jpg',
                'user_id' => 1,
                'tanggal_mulai' => Carbon::create('2023', '07', '01', '09', '00'),
                'tanggal_selesai' => Carbon::create('2023', '07', '01', '12', '00'),
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Webinar Nasional : Dua Waktu Singkat',
                'alamat' => 'https://meet.google.com/',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-two.jpg',
                'tanggal_mulai' => Carbon::create('2023', '07', '02', '13', '00'),
                'tanggal_selesai' => Carbon::create('2023', '07', '02', '16', '00'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Webinar Nasional : 100 Amalan Sunnah',
                'alamat' => 'https://meet.google.com/',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-three.jpg',
                'tanggal_mulai' => Carbon::create('2023', '07', '03', '18', '00'),
                'tanggal_selesai' => Carbon::create('2023', '07', '03', '21', '00'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Webinar Nasional : Peringatan Terhadap Dosa',
                'alamat' => 'https://meet.google.com/',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-four.jpg',
                'tanggal_mulai' => Carbon::create('2023', '07', '04', '20', '00'),
                'tanggal_selesai' => Carbon::create('2023', '07', '04', '22', '00'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Webinar Nasional : Saudaraku Seislam',
                'alamat' => 'https://meet.google.com/',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-five.jpg',
                'tanggal_mulai' => Carbon::create('2023', '07', '05', '05', '00'),
                'tanggal_selesai' => Carbon::create('2023', '07', '05', '06', '00'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Webinar Nasional : Adab Penuntut Ilmu',
                'alamat' => 'https://meet.google.com/',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-six.jpg',
                'tanggal_mulai' => Carbon::create('2023', '07', '06', '09', '00'),
                'tanggal_selesai' => Carbon::create('2023', '07', '06', '12', '00'),
                'user_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Webinar Nasional : Pahala Puasa Arafah',
                'alamat' => 'https://meet.google.com/',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-seven.jpg',
                'tanggal_mulai' => Carbon::create('2023', '07', '07', '13', '00'),
                'tanggal_selesai' => Carbon::create('2023', '07', '07', '16', '00'),
                'user_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Webinar Nasional : Doa Orang Shaleh',
                'alamat' => 'https://meet.google.com/',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-eight.jpg',
                'tanggal_mulai' => Carbon::create('2023', '07', '08', '18', '00'),
                'tanggal_selesai' => Carbon::create('2023', '07', '08', '21', '00'),
                'user_id' => 2,
                'created_at' => Carbon::now(),
            ],
        ];
        foreach ($dataEvent as $value) {
            Event::create($value);
        }
    }
}
