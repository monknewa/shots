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
        $this->call(CategorySeeder::class);

        \App\User::create([
            'name'=>'Bibek Mhj',
            'address'=>'Lazimpat',
            'phoneNumber'=>'984125874',
            'email'=>'monknewa@gmail.com',
            'password'=>bcrypt("secret"),
            'isAdmin'=>true
        ]);
    }
}
