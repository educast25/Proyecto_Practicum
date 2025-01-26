<?php

namespace Tests\Feature;

use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientShowTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function it_can_show_a_patient()
    {
        $patient = Patient::factory()->create();
    
        $response = $this->get(route('patients.show', $patient->id));
    
        $response->assertStatus(200);
        $response->assertViewHas('patient', $patient);
    }
}