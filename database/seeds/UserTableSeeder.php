<?php


use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert(array(
            'name' => 'Rafael Varela',
            'email' => 'rafa_varela@yahoo.com',
            'password' => Hash::make('123456')
        ));
    }

} 