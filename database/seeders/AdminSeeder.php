<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'first_name' => "Admin",
            'last_name'=> "01",
            'full_name'=> "Admin 01",
            'email'=> "admin01@med.com",
            'phone' =>"1111111111",
            'password'=> "123",
        ]);
    }
}
