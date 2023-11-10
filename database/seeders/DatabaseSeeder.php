<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PnfSeeder::class);
        $this->call(ProfessorSeeder::class);
        $this->call(Trimestral_mallaSeeder::class);
        $this->call(Semestral_mallaSeeder::class);
        $this->call(RegularSeeder::class);
        $this->call(AcreditableSeeder::class);
        $this->call(StudentSeeder::class);

    }
}
