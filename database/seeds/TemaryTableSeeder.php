<?php
use Illuminate\Database\Seeder;
class TemaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Temary::class, 20)->create();
    }
}
