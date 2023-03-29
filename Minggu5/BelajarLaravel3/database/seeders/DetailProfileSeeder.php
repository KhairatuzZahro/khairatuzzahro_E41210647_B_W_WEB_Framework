<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_profile')->insert([
            'address' => 'jember',
            'nomor_tlp' => '085796167512',
            'ttl' => '2003-04-13',
            'foto' => 'picture.png'
        ]);
    }
}
