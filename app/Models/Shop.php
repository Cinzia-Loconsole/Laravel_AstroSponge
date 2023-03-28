<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Shop extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'city',
        'description',
        'image',
        'user_id'
    ];

    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}

public function elements(): BelongsToMany
{
    return $this->belongsToMany(Element::class);
}

}
