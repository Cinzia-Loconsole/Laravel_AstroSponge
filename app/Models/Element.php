<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Shop;

class Element extends Model
{
    
    use HasFactory;

    protected $fillable=[

        'name',
        'price',
        'description',
        'img'

    ];

    public function shops(): BelongsToMany
    {
        return $this->belongsToMany(Shop::class);
    }

}
