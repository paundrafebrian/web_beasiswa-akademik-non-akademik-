<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            [
                'nim' => 20102118,
                'nama' => 'Paundra febrian',
                'email' => '20102118@ittelkom-pwt.ac.id',
                'no_hp' => '081219164737',
                'ipk' => 3.93,
            ],
            [
                'nim' => 20102117,
                'nama' => 'Jeany Lucia Handayani',
                'email' => '20102117@ittelkom-pwt.ac.id',
                'no_hp' => '081392370103',
                'ipk' => 3.95,
            ],
            [
                'nim' => 20102001,
                'nama' => ' Maria Garcia',
                'email' => '20102001@ittelkom-pwt.ac.id',
                'no_hp' => '08543217698',
                'ipk' => 2.98,
            ],
            [
                'nim' => 20102002,
                'nama' => 'Wei Chen',
                'email' => '20102002@ittelkom-pwt.ac.id',
                'no_hp' => '08111223221',
                'ipk' => 3.10,
            ],
            [
                'nim' => 20102003,
                'nama' => 'Fatima Khan',
                'email' => '20102003@ittelkom-pwt.ac.id',
                'no_hp' => '087654321098',
                'ipk' => 3.75,
            ],
            [
                'nim' => 20102004,
                'nama' => 'Juan Martinez',
                'email' => '20102004@ittelkom-pwt.ac.id',
                'no_hp' => '08123894765',
                'ipk' => 3.83,
            ],
            [
                'nim' => 20102005,
                'nama' => 'ridwan kamil',
                'email' => '20102005@ittelkom-pwt.ac.id',
                'no_hp' => '081234567000',
                'ipk' => 3.95,
            ],
            [
                'nim' => 20102006,
                'nama' => 'kusnedi',
                'email' => '201020060@ittelkom-pwt.ac.id',
                'no_hp' => '081267656765',
                'ipk' => 3.65,
            ],
            [
                'nim' => 20102007,
                'nama' => 'eli sugigi',
                'email' => '20102007@ittelkom-pwt.ac.id',
                'no_hp' => '08987659232',
                'ipk' => 3.80,
            ],
            [
                'nim' => 20102008,
                'nama' => 'jan etes',
                'email' => '20102008@ittelkom-pwt.ac.id',
                'no_hp' => '081278767656',
                'ipk' => 3.85,
            ],
            [
                'nim' => 20102009,
                'nama' => 'kaesang',
                'email' => '20102009@ittelkom-pwt.ac.id',
                'no_hp' => '081234545676',
                'ipk' => 3.75,
            ],
            [
                'nim' => 20102010,
                'nama' => 'gibran raka',
                'email' => '20102010@ittelkom-pwt.ac.id',
                'no_hp' => '081289876765',
                'ipk' => 3.95,
            ],
        ];

        foreach ($data as $key => $d) {
            Mahasiswa::create($d);
        }
    }
}
