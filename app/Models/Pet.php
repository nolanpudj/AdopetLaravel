<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    public function shelter()
    {
        return $this->belongsTo(Shelter::class, 'shelter_id', 'id');
    }
}
