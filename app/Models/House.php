<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class House
 *
 * @property $id
 * @property $price
 * @property $title
 * @property $category
 * @property $rooms
 * @property $baths
 * @property $persons
 * @property $population
 * @property $province
 * @property $description
 * @property $preferences
 * @property $nameProperty
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class House extends Model
{
    use HasFactory;
	
    static $rules = [
		'price' => 'required',
		'title' => 'required',
		'category' => 'required',
		'rooms' => 'required',
		'baths' => 'required',
		'persons' => 'required',
		'population' => 'required',
		'province' => 'required',
		'description' => 'required',
		'preferences' => 'required',
		'nameProperty' => 'required',
		'phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['price','title','category','rooms','baths','persons','population','province','description','preferences','nameProperty','phone'];



}
