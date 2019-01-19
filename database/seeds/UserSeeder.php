<?php

use Illuminate\Database\Seeder;
use App\User ;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

       'name'=>'admin',
            'password'=>bcrypt('123456'),
        'email'=>'admin@qq.com'


        ]);

         User::create([


            'name'=>'tomclucluze',
                'password'=>bcrypt('123456'),
                'email'=>'tomclucluze@qq.com'

        ]);

       factory(\App\User::class,18)->create() ;
    }
}
