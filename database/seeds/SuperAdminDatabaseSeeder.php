<?php

use App\Models\SuperAdmin;
use Illuminate\Database\Seeder;

class SuperAdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = new SuperAdmin();
        $superAdmin->name = 'SuperAdmin';
        $superAdmin->email = 'superadmin@gmail.com';
        $superAdmin->password = bcrypt('123456789');
        $superAdmin->save();
    }
}
