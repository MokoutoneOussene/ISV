<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousDomaine extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Domaine() {
        return $this->belongsTo(Domaine::class, 'domaines_id');
    }

    function ImageDomaine() {
        return $this->hasMany(ImageDomaine::class);
    }
}
