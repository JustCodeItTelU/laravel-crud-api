<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'content'];
    protected $with = ['comments'];

    public function comments(){
        return $this->hasMany(Comment::class);}

}
