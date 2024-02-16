<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data for technicians
        DB::table('technicians')->insert([
            'name' => 'Technician Name',
            'slug' => 'technician-name',
            'photo' => 'technician-photo.jpg', // Path to photo, if available
            'email' => 'technician@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Set the desired password
            'phone' => '1234567890', // If available
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert data for specialists
        $specialistId = DB::table('specialists')->insertGetId([
            'name' => 'Specialist Name',
            'image' => 'specialist-image.jpg', // Path to image, if available
            'slug' => 'specialist-name',
            'description' => 'Description of the specialist',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Associate technician with specialist
        DB::table('technician_specialists')->insert([
            'technician_id' => 1, // Set the technician_id accordingly
            'specialist_id' => $specialistId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
