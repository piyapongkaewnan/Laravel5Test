<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'Piyapong Kaewnan';
        $user->email  = 'mailtopiyapong@gmail.com';
        $user->password = Hash::make('1234');
        $user->save();
    }
}
