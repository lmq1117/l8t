<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = $this->withFaker();
        DB::table('users')->insert([
            'name'=>$faker->name,
            'email'=>$faker->unique()->safeEmail,
            'email_verified_at'=>now(),
            'password'=>bcrypt("123456"),
            'remember_token'=>Str::random(10)
        ]);
    }

    protected function withFaker(){
        return Container::getInstance()->make(Generator::class);
    }
}
