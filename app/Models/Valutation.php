<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valutation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function valutationRequests()
    {
        return $this->belongsTo(ValutationRequest::class);
    }

    public function professor(){
        return $this->belongsTo(Professor::class);
    }
}
