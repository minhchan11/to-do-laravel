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

     $projects = array(
         ['id' => 1, 'name' => 'Clean the house','created_at' => new DateTime, 'updated_at' => new DateTime],
         ['id' => 2, 'name' => 'Wash the dog','created_at' => new DateTime, 'updated_at' => new DateTime],
         ['id' => 3, 'name' => 'Do homework','created_at' => new DateTime, 'updated_at' => new DateTime],
     );

     // Uncomment the below to run the seeder
     DB::table('tasks')->insert($projects);
    }
}
