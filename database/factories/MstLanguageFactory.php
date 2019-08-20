<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Http\Models\MstLanguage as Lang;
use Faker\Generator as Faker;

$factory->define(Lang::class, function (Faker $faker) {
    return [
        'short_name'    => $faker->short_name,
        'long_name'     => $faker->long_name,
        'icon'          => $faker->icon,
        'flag'          => $faker->flag,
        'created_user'  => $faker->created_user,
        'updated_user'  => $faker->updated_user,
        'deleted_user'  => $faker->deleted_user,
        'created_at'    => $faker->created_at,
        'updated_at'    => $faker->updated_at,
        'deleted_at'    => $faker->deleted_at
    ];
});
