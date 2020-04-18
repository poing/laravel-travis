<?php

use Faker\Generator as Faker;
use Matrix\Tests\Baseline\Models\BaseLineAlpha;

$factory->define(BaseLineAlpha::class, function (Faker $faker) {
    return [
        'value' => $faker->sentence(6),
    ];
});
