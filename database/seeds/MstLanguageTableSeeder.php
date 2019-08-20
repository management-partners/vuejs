<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MstLanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_language')->insert([
          [
            'short_name'    => 'vi',
            'long_name'     => 'Tiếng Việt',
            'icon'          => 'vn',
            'flag'          => 0,
            'created_user'  => 1,
            'updated_user'  => null,
            'deleted_user'  => null,
            'created_at'    => Carbon::now(),
            'updated_at'    => null,
            'deleted_at'    => null
          ],
          [
            'short_name'    => 'en',
            'long_name'     => 'Tiếng Anh',
            'icon'          => 'en',
            'flag'          => 0,
            'created_user'  => 1,
            'updated_user'  => null,
            'deleted_user'  => null,
            'created_at'    => Carbon::now(),
            'updated_at'    => null,
            'deleted_at'    => null
          ],
          [
            'short_name'    => 'ja',
            'long_name'     => 'Tiếng Nhật',
            'icon'          => 'jp',
            'flag'          => 0,
            'created_user'  => 1,
            'updated_user'  => null,
            'deleted_user'  => null,
            'created_at'    => Carbon::now(),
            'updated_at'    => null,
            'deleted_at'    => null
          ]
        ]);
    }
}
