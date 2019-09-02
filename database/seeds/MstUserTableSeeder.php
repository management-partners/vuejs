<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MstUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_user')->insert([
          [
             'user_name'     => 'ttson',
             'full_name'     => 't t son',
             'email'         => 'ttson24@gmail.com',
             'birdthday'     => Carbon::now(),
             'sex'           => true,
             'icon'          => 'vn',
             'password'      => '123456',
             'address'       => '4 . a . b. c',
             'is_activated'  => true,
             'remember_token'=> 'remember_token',
             'flag'          => false,
             'created_user'  => 1,
             'updated_user'  => null,
             'deleted_user'  => null,
             'created_at'    => Carbon::now(),
             'updated_at'    => null,
             'deleted_at'    => null
        ],
        [
           'user_name'     => 'ttson',
           'full_name'     => 't t son',
           'email'         => 'ttson24@gmail.com.vn',
           'birdthday'     => Carbon::now(),
           'sex'           => true,
           'icon'          => 'vn',
           'password'      => '123456',
           'address'       => '4 . a . b. c',
           'is_activated'  => true,
           'remember_token'=> 'remember_token',
           'flag'          => false,
           'created_user'  => 1,
           'updated_user'  => null,
           'deleted_user'  => null,
           'created_at'    => Carbon::now(),
           'updated_at'    => null,
           'deleted_at'    => null
      ],
      [
         'user_name'     => 'ttson',
         'full_name'     => 't t son',
         'email'         => 'ttson24@gmail.co.jp',
         'birdthday'     => Carbon::now(),
         'sex'           => true,
         'icon'          => 'vn',
         'password'      => '123456',
         'address'       => '4 . a . b. c',
         'is_activated'  => true,
         'remember_token'=> 'remember_token',
         'flag'          => false,
         'created_user'  => 1,
         'updated_user'  => null,
         'deleted_user'  => null,
         'created_at'    => Carbon::now(),
         'updated_at'    => null,
         'deleted_at'    => null
      ]]);
    }
}
