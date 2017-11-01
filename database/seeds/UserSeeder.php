<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
        	'name' => 'Admin',
        	'cpf' => '000.000.000-00',
        	'email' => 'Admin@email.com',
        	'password' => bcrypt('admin12345'),
        	'admin' => 1,
        ]);
        $user->delete();
        $user->save();
    }
}
