<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\WorkSession;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CorrectFormatTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function status_value_must_be_valid()
    {
        $session = WorkSession::factory()->create();
        $this->assertContains($session->status, ['planifiee', 'en_cours', 'terminee', 'annulee']);
    }
    
    /** @test */
    public function session_times_must_be_valid_format()
    {
        $session = WorkSession::factory()->create();
        $this->assertMatchesRegularExpression('/^\d{2}:\d{2}:\d{2}$/', $session->heure_debut);
        $this->assertMatchesRegularExpression('/^\d{2}:\d{2}:\d{2}$/', $session->heure_fin);
    }
    
    /** @test */
    public function session_date_must_be_valid_date()
    {
        $session = WorkSession::factory()->create();
        $this->assertNotFalse(strtotime($session->date));
    }
}
