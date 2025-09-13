<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Role;
use App\Models\WorkSession;
use App\Models\Materiel;
use App\Models\Salle;
use App\Models\Projet;

class RelationTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function user_can_have_roles()
    {
        $user = User::factory()->create();
        $role = Role::factory()->create();
        $user->roles()->attach($role->id);
        $this->assertTrue($user->roles->contains($role));
    }
    
    /** @test */
    public function session_belongs_to_user_and_projet_and_salle()
    {
        $session = WorkSession::factory()->create();
        $this->assertNotNull($session->user);
        $this->assertNotNull($session->projet);
        $this->assertNotNull($session->salle);
    }
    
    /** @test */
    public function session_can_have_multiple_materiels()
    {
        $session = WorkSession::factory()->create();
        $materiel1 = Materiel::factory()->create();
        $materiel2 = Materiel::factory()->create();
        $session->materiels()->attach([$materiel1->id, $materiel2->id]);
        $this->assertCount(2, $session->materiels);
    }
}
