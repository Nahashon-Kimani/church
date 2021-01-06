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
       DB::table('users')->insert([
       	'role_id' => '1',
        'name' => 'John',
        'username' => 'Mweruli',
        'email' => 'mweruli@gmail.com',
        'password' => bcrypt('mweruli1996')
        ]);

        DB::table('users')->insert([
       	'role_id' => '2',
        'name' => 'Mbuci',
        'username' => 'Mbuci',
        'email' => 'mbuci@gmail.com',
        'password' => bcrypt('mbuci123')
        ]);
    }
}
