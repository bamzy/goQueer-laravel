<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(MediaTypeTableSeeder::class);
         $this->call(CopyrightStatusTableSeeder::class);
         $this->call(LocationTableSeeder::class);
         $this->call(MediaTableSeeder::class);
    }
}
