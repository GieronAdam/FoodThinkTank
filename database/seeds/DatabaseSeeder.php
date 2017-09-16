<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('users')->truncate();
        DB::table('posts')->truncate();
        DB::table('roles')->truncate();
        DB::table('photos')->truncate();
        DB::table('categories')->truncate();


//        factory(FoodThinkTank\User::class, 10)->create();
//        factory(FoodThinkTank\Post::class, 10)->create();
        factory(FoodThinkTank\Role::class, 2)->create();
        factory(FoodThinkTank\Photo::class, 15)->create();
        factory(FoodThinkTank\Category::class, 7)->create();


        factory(FoodThinkTank\User::class, 10)->create()->each(function($user){
            $user->posts()->save(factory(FoodThinkTank\Post::class)->make());
        });
    }
}
