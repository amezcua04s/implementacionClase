<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;


class doctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'name' => 'Santiago Amezcua',
            'specialty' => 'Cardiología',
            'professional_license' => '320264515',
        ]);

        Doctor::create([
            'name' => 'Daniel Cornejo',
            'specialty' => 'Pediatría',
            'professional_license' => '32027481',
        ]);

        Doctor::create([
            'name' => 'Iovanni Ramos',
            'specialty' => 'Neurología',
            'professional_license' => '3120498102',
        ]);
    }
}
