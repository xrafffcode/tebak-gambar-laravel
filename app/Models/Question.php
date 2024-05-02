<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'image',
        'answer',
    ];

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = $value->store('assets/questions', 'public');
    }

    public function getImageAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
