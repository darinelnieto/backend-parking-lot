<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Mark;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Collection;

class MarkTest extends TestCase
{
    public function test_a_mark_has_many_vehicles()
    {
        $mark = new Mark;
        
        $this->assertInstanceOf(Collection::class, $mark->vehicles);
    }
    public function test_a_vehicle_has_many_owners()
    {
        $vehicle = new Vehicle;

        $this->assertInstanceOf(Collection::class, $vehicle->owners);
    }
}