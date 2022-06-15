<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('example')->insert([
        //     'name' => Str::random(12),
        //     'count' => rand(0, 100),
        //     'verified'=> false,
        // ]);
        
        $this->call(ExampleSeeder::class);
        
        // User::factory()
        //     ->count(50)
        //     ->hasPosts(1)
        //     ->create();


        
        
    }
}
