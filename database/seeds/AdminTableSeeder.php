<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::firstOrNew(['email' => 'shakshisharma1396@gmail.com']);
        if(!$admin->exists) {
            $admin->fill([
                'name' => 'Shakshi',
                'email' => 'shakshisharma1396@gmail.com',
                'password' => bcrypt('ls@adm1n'),
            ])->save();
        }else{
            echo "\e[0;30;41m".$admin->email." already exists\e[0m\n";
        }
    }
}
