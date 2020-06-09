<?php

use App\Models\role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user=new Role();
        $role_user->name='клиент';
        $role_user->save();

        $role_admin=new Role();
        $role_admin->name='администратор';
        $role_admin->save();

        $role_master=new Role();
        $role_master->name='мастер';
        $role_master->save();


    }
}
