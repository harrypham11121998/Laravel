<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TrainersSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 500  ; $i++) { 
            DB::table('trainers')->insert(
                ['trainer_name' => 'LayLalay', 'company_id' => 1, 
                'trainer_email' => 'bnv@gmail.com', 'trainer_phone' => '01234']
            );
        }
    }
}