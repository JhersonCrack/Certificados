<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CourseTableSeeder::class);
         $this->call(TemaryTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(TypeTableSeeder::class);
         $this->call(CertificateTableSeeder::class);
    }
}
