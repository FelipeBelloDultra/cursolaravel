<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Felipe Bello Dultra',
            'email'     => 'felipe.bello_dultra@hotmail.com',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Outro Usuário',
            'email'     => 'outro@hotmail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
