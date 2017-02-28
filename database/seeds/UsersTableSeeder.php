<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());

        $user = User::find(1);
        $user->name ='Aiker';
        $user->email = 'mantou521@hotmail.com';
        $user->password = 111111;
        $user->is_admin = true;
        $user->activated = true;
        $user->save();
    }
}