<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\House;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiCRUDHouseTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function itCanListAllHouses()
    {
        House::factory()->count(3)->create();

        $response = $this->getJson(route('houses.index'));

        $response->assertOk()
            ->assertJsonCount(3);
    }

    public function itCanCreateAHouse()
    {
        $house = House::factory()->raw();

        $response = $this->postJson(route('houses.store'), $house);

        $response->assertCreated()
            ->assertJsonFragment($house);
    }
    
    public function itCanShowAHouse()
    {
        $house = House::factory()->create();

        $response = $this->getJson(route('houses.show', $house->id));

        $response->assertOk()
            ->assertJsonFragment([
                'price' => $house->price,
                'title' => $house->title,
                'category' => $house->category,
                'rooms' => $house->rooms,
                'baths' => $house->baths,
                'persons' => $house->persons,
                'population' => $house->population,
                'province' => $house->province,
                'preferences' => $house->preferences,
                'name_property' => $house->name_property,
                'phone' => $house->phone,
            ]);
        }

        public function itCanUpdateAHouse()
    {
        $house = House::factory()->create();

        $data = [
            'price' => 100,
            'title' => 'New Title',
            'category' => 'New Category',
            'rooms' => 6,
            'baths' => 2,
            'persons' => 5,
            'population' => 'New Population',
            'province' => 'New Province',
            'preferences' => 'New Preferences',
            'name_property' => 'New Name Property',
            'phone' => '123456789',
        ];

        $response = $this->putJson(route('houses.update', $house->id), $data);

        $response->assertOk()
            ->assertJsonFragment($data);
    }
    
    public function itCanDeleteAHouse()
    {
        $house = House::factory()->create();

        $response = $this->deleteJson(route('houses.destroy', $house->id));

        $response->assertOk()
            ->assertJsonFragment(['message' => 'House deleted']);

        $this->assertDatabaseMissing('houses', ['id' => $house->id]);
    }
}
