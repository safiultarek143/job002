<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\UserType::insert([
            'id' => '1',
            'user_type_name' => 'Applicant',
            'user_type' => 1
        ]);

        \App\UserType::insert([
            'id' => '2',
            'user_type_name' => 'Company',
            'user_type' => 2
        ]);
    }
}
