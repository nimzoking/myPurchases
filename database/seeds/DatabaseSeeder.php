<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create five users
        factory(App\User::class, 5)->create();

        factory(App\Purchase::class, 50)->create();
    }
}
