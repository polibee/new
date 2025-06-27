<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Model::class::unguard();
        $this->call(UsersTableSeeder::class);
        Model::class::reguard();
        //User::factory()->create([
           // 'name' => 'Test User',
            //'email' => 'test@example.com',
       // ]);
    }
}
