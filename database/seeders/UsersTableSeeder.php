<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'title_id' => 2,
            'email' => 'bagus@gmail.com',
            'telephone' => '085593844499',
            'date_of_birth' => '1998'
        ]);
    }
}
