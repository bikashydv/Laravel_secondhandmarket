<?php

use Illuminate\Database\Seeder;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('admins')->truncate();
        $data = [
            'name' =>'Admin',
            'email' =>'admin@admin.com',
            'username' =>'admin',
            'password' => bcrypt('123456'),
        ];
        \Illuminate\Support\Facades\DB::table('admins')->insert($data);


    }
}
