<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'cod', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function scopeFromCity($query, $value)
    {
        if (!empty($value))
            return $query->where('city_id', $value);
    }
    public function scopeName($query, $value)
    {
        if (!empty($value))
            return $query->where('name','like','%'. $value.'%');
    }
    protected static function booted()
    {
        static::addGlobalScope('hascity', function (Builder $builder) {
            $builder->whereHas('city');
        });
    }
}
