<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageDomaine extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function SousDomaine() {
        return $this->belongsTo(SousDomaine::class, 'sous_domaines_id');
    }
}
