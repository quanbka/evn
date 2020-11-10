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
        // $this->call(UsersTableSeeder::class);
        for ($i=0; $i < 1000; $i++) {
            \App\Models\Product::create([
                'title' => 'Ten san pham ' . $i
            ]);
        }

    }
}
