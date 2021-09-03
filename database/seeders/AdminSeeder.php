<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => config('admin.admin_name'),
            'email' => config('admin.admin_email'),
            'password' => config('admin.admin_password_hash')
        ]);
    }
}
