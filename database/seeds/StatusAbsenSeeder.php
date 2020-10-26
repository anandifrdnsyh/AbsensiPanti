<?php

use Illuminate\Database\Seeder;

class StatusAbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_absens')->insert([
            [
                'id' => 1,
                'nama' => 'Hadir',
            ],
            [
                'id' => 2,
                'nama' => 'Tidak Hadir',
            ],
            [
                'id' => 3,
                'nama' => 'Sakit',
            ],
            [
                'id' => 4,
                'nama' => 'Cuti',
            ],
        ]);
    }
}
