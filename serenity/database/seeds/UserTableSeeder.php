<?php

use App\Models\role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user=Role::where('name', 'Клиент')->first();
        $role_master=Role::where('name', 'Мастер')->first();
        $role_admin=Role::where('name', 'Администратор')->first();

        $user=new User();
        $user->surname='Петрова';
        $user->name='Мария';
        $user->email='maria@example.com';
        $user->phone='8988888888';
        $user->password=bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);

        $admin=new User();
        $admin->surname='Лукина';
        $admin->name='Лиза';
        $admin->email='liza@example.com';
        $admin->phone='8988988888';
        $admin->password=bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $master=new User();
        $master->surname='Тимофеева';
        $master->name='Настя';
        $master->email='nastya@example.com';
        $master->phone='898888888878';
        $master->password=bcrypt('master');
        $master->save();
        $master->roles()->attach($role_master);
    }
}
