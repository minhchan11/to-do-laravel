<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         // Uncomment the below to wipe the table clean before populating
         DB::table('categories')->delete();

         $categories = array(
             ['id' => 1, 'name' => 'Home', 'slug' => 'category-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
             ['id' => 2, 'name' => 'School', 'slug' => 'category-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
             ['id' => 3, 'name' => 'Personal', 'slug' => 'category-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
         );

         // Uncomment the below to run the seeder
         DB::table('categories')->insert($categories);
     }
}
