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
            'name' => 'Tester',
            'email' => 'tester@pixelkairos.com.br',
            'password' => bcrypt('teste123'),
            'role' => 'admin',
        ]);
    }
}
