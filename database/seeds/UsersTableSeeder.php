<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* \DB::table('users')->insert(
            [
                'name' => 'Administrator',
                'email' => 'lukinhoh@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'), // password
                'remember_token' => Str::random(10),
            ]
        ); */

        factory(\App\User::class, 40)->create()->each(function($user) {
            $user->store()->save(factory(\App\Store::class)->make());
        });
    }
}
