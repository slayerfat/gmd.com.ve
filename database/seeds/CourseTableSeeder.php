<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = factory(App\Course::class, 10)->make();

        DB::table('courses')->insert($a->toArray());
    }
}
