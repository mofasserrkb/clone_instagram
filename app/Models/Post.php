<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
   // protected $guarded=[];
   protected $fillable = [
    'user_id',
    'caption',
    'image'

];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
