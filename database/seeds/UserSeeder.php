<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'qrcode' => 'images/admin123QR-Code.png',
            'nama' => 'admin',
            'kode' => 'admin123',
            'email' => 'admin@gmail.com',
            'alamat' => 'Jl. Sampoerna No. 1 Surabaya 60163',
            'telphon' => '0812-5234-5030',
            'password' => bcrypt('admin123'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'qrcode' => 'images/anandi123QR-Code.png',
            'nama' => 'Moch Anandi Ferdiansyah',
            'kode' => 'anandi123',
            'email' => 'anandi@gmail.com',
            'alamat' => 'Jl. Sampoerna No. 1 Surabaya 60163',
            'telphon' => '0812-5234-5030',
            'password' => bcrypt('ManandiF17'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'qrcode' =>'images/rama123QR-Code.png',
            'nama' => 'Andi Ramadhan',
            'kode' =>'Andi',
            'email' => 'rama@gmail.com',
            'alamat' => 'Jl. Sampoerna No. 1 Surabaya 60163',
            'telphon' => '0812-5234-5030',
            'password' => bcrypt('rama1234'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'qrcode' => 'images/ali123QR-Code.png',
            'nama' => 'Ali Akbar',
            'kode' => 'ali123',
            'email' => 'ali@gmail.com',
            'alamat' => 'Jl. Sampoerna No. 1 Surabaya 60163',
            'telphon' => '0812-5234-5030',
            'password' => bcrypt('ali1234'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'qrcode' => 'images/yandika123QR-Code.png',
            'nama' => 'Yandika Warisman',
            'kode' => 'yandika123',
            'email' => 'yandika@gmail.com',
            'alamat' => 'Jl. Sampoerna No. 1 Surabaya 60163',
            'telphon' => '0812-5234-5030',
            'password' => bcrypt('yandika1234'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'qrcode' => 'images/mey123QR-Code.png',
            'nama' => 'Meysaro',
            'kode' => 'mey123',
            'email' => 'mey@gmail.com',
            'alamat' => 'Jl. Sampoerna No. 1 Surabaya 60163',
            'telphon' => '0812-5234-5030',
            'password' => bcrypt('mey1234'),
        ]);
    }
}
