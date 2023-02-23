<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\House;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDHouseTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_listHouseAppearInHomeView() {
        $this->withExceptionHandling();
        $houses = House::factory(2)->create();
        $house = $houses[0];
        $response = $this->get(route('house.index'));
        $response->assertSee($house->title);
        $response->assertStatus(200)->assertViewIs('house.index');
    }

    public function test_aHouseCanBeDeleted() {
        $this->withExceptionHandling();

        $house = House::factory()->create();
        $this->assertCount(1, House::all());

        $response = $this->delete(route('house.destroy', $house->id));
        $this->assertCount(0, House::all());
    }

    public function test_aHouseCanBeCreated(){
        $this->withExceptionHandling();

        
        $response = $this->post(route ('house.store'),
        [
            'price' => '80',
            'title' => 'titleValue',
            'category' => 'destinationAddress',
            'rooms' => '5',
            'baths' => '1',
            'persons' => '4',
            'population' => 'populationValue',
            'province' => 'provinceValue',
            'preferences' => 'preferences',
            'nameProperty' => '3',
            'phone' => '600123456',
            
        ]);

        $this->assertCount(1,House::all()); 
    }


    public function test_aHouseCanBeShowed(){
        $this->withExceptionHandling();
        $house=House::factory()->create();
        $this->assertCount(1,House::all());
        $response=$this->get(route('house.show', $house->id));
        $response->assertSee($house->title);
        $response->assertStatus(200)->assertViewIs('house.show');
    }
}
