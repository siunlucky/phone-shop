<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Item::create([
            'name' => 'Samsung Galaxy M2',
            'description' => 'A mobile phone, cellular phone, cell phone, cellphone, handphone, hand phone or pocket phone, sometimes shortened to simply mobile, cell, or just phone, is a portable telephone that can make and receive calls over a radio frequency link while the user is moving within a telephone service area.',
            'price' => '3550000',
            'image' => 'gambar.jpg',
            'released' => '2018',
            'quantity' => '10'
        ]);

        Item::create([
            'name' => 'Xiaomi M6',
            'description' => 'A mobile phone, cellular phone, cell phone, cellphone, handphone, hand phone or pocket phone, sometimes shortened to simply mobile, cell, or just phone, is a portable telephone that can make and receive calls over a radio frequency link while the user is moving within a telephone service area.',
            'price' => '1550000',
            'image' => 'gambar2.jpg',
            'released' => '2020',
            'quantity' => '5'
        ]);

        Item::create([
            'name' => 'Xenia A5',
            'description' => 'A mobile phone, cellular phone, cell phone, cellphone, handphone, hand phone or pocket phone, sometimes shortened to simply mobile, cell, or just phone, is a portable telephone that can make and receive calls over a radio frequency link while the user is moving within a telephone service area.',
            'price' => '6552000',
            'image' => 'gambar3.jpg',
            'released' => '2024',
            'quantity' => '7'
        ]);

        User::create([
            'name' => 'Faiz Elfahad Kurniawan',
            'email' => 'faizelfahad2@gmail.com',
            'password' => bcrypt('prj977je94'),
            'address' => 'JL. Sanan 1A No. 26, Kota Malang',
            'gender' => 'male',
        ]);
    }
}
