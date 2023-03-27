<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
}