<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence($nbWords = 3),
        'photo'=>'back/memberimg/'. $faker->image('public/back/memberimg',400,300,null,false),
    ];
});
