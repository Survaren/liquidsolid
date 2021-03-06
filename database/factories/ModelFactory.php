<?php

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
  static $password;

  return [
    'name' => $faker->name,
    'email' => $faker->unique()->email,
    'password' => $password ?: $password = bcrypt('secret'),
    'remember_token' => str_random(10),
  ];
});
