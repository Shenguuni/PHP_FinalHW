<?php

use Illuminate\Database\Seeder;
use App\User as UserEloquent;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserEloquent::create([
            'name' => 'ThIsJaCk',
            'email' => 'admin@mail.com',
            'password' => bcrypt('0000'),
        ]);
    }
}