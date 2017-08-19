<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 20; $i++){

        DB::table('projects')->insert([
            'title' => 'Lorem ipsum dolor sit'.$i,
            'slug' => 'lorem-ipsum'.$i,
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'.$i,
            'full_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui nunc, condimentum a volutpat consectetur, pulvinar sit amet turpis. Donec finibus eu risus eget porta. Proin rutrum at risus vel viverra. Aliquam sit amet hendrerit orci. Sed volutpat vitae ante ac mattis. Praesent id neque vestibulum, hendrerit mauris eget, pretium mauris. Proin gravida nisi turpis, quis ornare eros rutrum id. Ut cursus ultricies semper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc sodales erat leo, ac laoreet erat placerat sit amet. In eget libero mi. Integer ut faucibus dolor.',
            'author' => 'John'.$i,
            'category' => 'Projects',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        }
    }
}
