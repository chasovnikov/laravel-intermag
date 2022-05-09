<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory,
        SoftDeletes,
        Translatable;

    protected $fillable = ['name', 'name_en'];

    public function propertyOptions()
    {
        return $this->hasMany(PropertyOption::class);
    }

    //TODO: check table name and fields
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
