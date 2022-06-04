<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::create([
            'title_id' => 2,
            'email' => 'bagus@gmail.com',
            'telephone' => '085593844499',
            'date_of_birth' => '1998'
        ]);
    }
}
