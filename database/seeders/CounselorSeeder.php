<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CounselorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counselors')->insert([
            'first_name' => "Counselor",
            'last_name'=> "01",
            'full_name'=> "Counselor 01",
            'email'=> "counselor01@med.com",
            'phone' =>"2222222222",
            'password'=> "123",
        ]);
    }
}
