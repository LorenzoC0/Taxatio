<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValutationRequest extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function valutations()
    {
        return $this->hasMany(Valutation::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
