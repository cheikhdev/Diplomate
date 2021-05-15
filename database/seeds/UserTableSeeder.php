<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                 [
                     'name'              => 'admin',
                     'email'             => 'admin@matcosen.sn',
                     'email_verified_at' => now(),
                     'password'          => '$2y$10$vvgt4IE.9su1r6TY12/aAOdEfeh0ZSNJyG9I2Bg4iR8h17gmdjf7y', // password
                     'roles'             => 'admin',
                     'admin_id' => '1',
                     'remember_token'    => Str::random(10),
                 ]
            ]
        );
        DB::table('administrators')->insert(
            [
                 [
                     'name_admin'              => 'Matcosen',
                     'prenom_admin'              => 'Matcosen',
                     'num_tel'             => '+221 77 478 19 07',
                     'status'    => 'Développeur',
                 ]
            ]
        );
    }
}
