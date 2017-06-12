<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Uncomment the below to wipe the table clean before populating
     DB::table('tasks')->delete();

     $tasks = array(
       ['id' => 1, 'name' => 'Clean the house', 'slug' => 'task-1', 'category_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['id' => 2, 'name' => 'Do Homework', 'slug' => 'task-2', 'category_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['id' => 3, 'name' => 'Go To The Gym', 'slug' => 'task-3', 'category_id' =>3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
      );

     // Uncomment the below to run the seeder
     DB::table('tasks')->insert($tasks);
    }
}
