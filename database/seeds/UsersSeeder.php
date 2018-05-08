<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user  = User::where('email', 'admin@bitterz.com')-> first();
    	if (!$user) {
    		User::create([
    			'name' => 'Tran Thanh Son',
    			'email' => 'admin@bitterz.com',
    			'password' => bcrypt('123456'),
    			'is_activated' => 1,
    			'type' => 1,
    		]);
    	}
    }
}
