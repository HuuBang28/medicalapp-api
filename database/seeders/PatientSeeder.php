<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'first_name' => "Patient",
            'last_name'=> "01",
            'full_name'=> "Patient 01",
            'email'=> "patient01@med.com",
            'phone' =>"3333333333",
            'password'=> "123",
        ]);
    }
}
