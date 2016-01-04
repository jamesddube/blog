<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        factory('App\User', 3)->create()
            ->each(function($u)
            {
                $u->posts()->save(factory('App\Post')->make());
            });

        factory('App\Comment', 2)->create();

        Model::reguard();
    }
}
