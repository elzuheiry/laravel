<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::make([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'password' => "12345678",
        ]);

        $user->is_admin = true;
        $user->save();
    }
}
