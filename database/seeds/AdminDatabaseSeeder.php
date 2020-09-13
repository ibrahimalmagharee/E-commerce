<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = 'Ibrahim Essam';
        $admin->email = 'ibrahimalmagree@gmail.com';
        $admin->password = bcrypt('ibrahim2020');
        $admin->save();
    }
}
