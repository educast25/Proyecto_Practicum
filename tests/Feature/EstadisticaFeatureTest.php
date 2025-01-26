<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EstadisticaFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_load_the_estadisticas_page()
    {
        $response = $this->get(route('estadisticas.index'));

        $response->assertStatus(200);
        $response->assertViewIs('estadisticas.index');
    }
}
