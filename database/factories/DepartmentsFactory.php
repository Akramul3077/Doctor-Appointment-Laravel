<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departments>
 */
class DepartmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $depertments_name = $this->faker->randomElement(['Family practice physician', 'Internal medicine physician', 'Family medicine vs. internal medicine physicians', 'Pediatricians', 'Geriatric medicine', 'Specialty', 'Allergists', 'Dermatologists', 'Infectious disease doctors', 'Ophthalmologists', 'Obstetrician/gynecologists', 'Cardiologists', 'Endocrinologists', 'Gastroenterologists', 'Nephrologists', 'Urologists','Pulmonologists','Otolaryngologists','Neurologists','Psychiatrists','Oncologists','Radiologists','Rheumatologists','General surgeons','Orthopedic surgeons','Cardiac surgeons','Anesthesiologists']);
        return [
            'name' => $depertments_name,
        ];
    }
}
