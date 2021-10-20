<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'lester@lyflyn.net',
            'password' => Hash::make('pàśšwôrd'),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
