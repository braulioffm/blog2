<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Braulio Fausto',
            'email' => 'braulioffm@gmail.com',
            'password' => bcrypt(123456789)

        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
