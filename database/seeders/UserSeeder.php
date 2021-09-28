<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!User::count()){
            $array = [
                [
                    'name'=>'Super Admin',
                    'email'=>'supeadmin@app.com',
                    'password'=>bcrypt('superadmin-cv'),
                    'role'=>'superadmin',
                    'gender'=>NULL,
                    'phone'=>NULL,
                    'created_at'=>now(),
                ],
                [
                    'name'=>'Admin',
                    'email'=>'admin@app.com',
                    'password'=>bcrypt('admin-cv'),
                    'role'=>'admin',
                    'gender'=>NULL,
                    'phone'=>NULL,
                    'created_at'=>now(),
                ],
                [
                    'name'=>'Sujan Poudel',
                    'email'=>'sujan@app.com',
                    'password'=>bcrypt('sujan-cv'),
                    'role'=>'user',
                    'gender'=>'male',
                    'phone'=>'9856021589',
                    'created_at'=>now()
                ],
                [
                    'name'=>'Jon Doe',
                    'email'=>'johndoe@app.com',
                    'password'=>bcrypt('john-cv'),
                    'role'=>'user',
                    'gender'=>'male',
                    'phone'=>'9845231987',
                    'created_at'=>now()
                ],

            ];
            User::insert($array);
        }
    }
}
