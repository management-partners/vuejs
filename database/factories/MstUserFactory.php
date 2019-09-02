<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Http\Models\MstUser as user;
use Faker\Generator as Faker;

$factory->define(user::class, function (Faker $faker) {
    return [
        'user_name'     => $faker->user_name,
        'full_name'     => $faker->full_name,
        'email'         => $faker->email,
        'birdthday'     => $faker->birdthday,
        'sex'           => $faker->sex,
        'icon'          => $faker->icon,
        'password'      => $faker->password,
        'address'       => $faker->address,
        'is_activated'  => $faker->is_activated,
        'remember_token'=> $faker->remember_token,
        'flag'          => $faker->flag,
        'created_user'  => $faker->created_user,
        'updated_user'  => $faker->updated_user,
        'deleted_user'  => $faker->deleted_user,
        'created_at'    => $faker->created_at,
        'updated_at'    => $faker->updated_at,
        'deleted_at'    => $faker->deleted_at
    ];
});
