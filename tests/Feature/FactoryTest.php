<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Salle;
use App\Models\Materiel;
use App\Models\WorkSession;
use App\Models\Role;

class FactoryTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_can_create_salle()
    {
        $salle = Salle::factory()->create();
        $this->assertDatabaseHas('salles', ['id' => $salle->id]);
    }
    
    /** @test */
    public function it_can_create_materiel()
    {
        $materiel = Materiel::factory()->create();
        $this->assertDatabaseHas('materiels', ['id' => $materiel->id]);
    }
    
    /** @test */
    public function it_can_create_session()
    {
        $session = WorkSession::factory()->create();
        $this->assertDatabaseHas('work_sessions', ['id' => $session->id]);
    }
    
    /** @test */
    public function it_can_create_role()
    {
        $role = Role::factory()->create();
        $this->assertDatabaseHas('roles', ['id' => $role->id]);
    }
}
