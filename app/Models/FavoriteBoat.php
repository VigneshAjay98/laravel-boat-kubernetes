<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteBoat extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'boat_id'
    ];

    public function boat()
    {
        return $this->hasOne(Boat::class, 'id', 'boat_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
