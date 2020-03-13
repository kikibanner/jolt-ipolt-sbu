<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@kikibanner.com',
                'is_admin'=>'1',
               'password'=> bcrypt('kikibanner'),
            ],
            [
               'name'=>'User',
               'email'=>'user@kikibanner.com',
                'is_admin'=>'0',
               'password'=> bcrypt('kikibanner'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
