<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriesSeender extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 10  ; $i++) { 
            DB::table('categories')->insert(
                ['category_name' => 'Mr.Cao']
            );
        }
    }
}