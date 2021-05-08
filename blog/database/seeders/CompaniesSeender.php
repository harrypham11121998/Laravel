<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CompaniesSeender extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 500  ; $i++) { 
            DB::table('companies')->insert(
                ['company_name' => 'Mr.Cao','category_id' => '1', 'company_web' => 'DP', 
                'company_address' => '34/5', 'company_code' => '1014', 'company_phone' => '0909']
            );
        }
    }
}