<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class House
 *
 * @property $id
 * @property $city
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class House extends Model
{
    
    static $rules = [
		'city' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['city','price'];



}
