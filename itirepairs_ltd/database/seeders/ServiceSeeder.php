<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'service_name' => 'IT Facility Management']);

        DB::table('services')->insert([
            'service_name' => 'Security System Installation']);

        DB::table('services')->insert([
            'service_name' => 'Digital Display and Advertisement Screens']);

        DB::table('services')->insert([
            'service_name' => 'Speech Transfer System']);

        DB::table('services')->insert([
            'service_name' => 'Commercial WiFi Solutions and Access control']);
            
        DB::table('services')->insert([
            'service_name' => 'Web Development']);
    }
}
