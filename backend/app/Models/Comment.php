<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    use HasFactory;

    protected $fillable = ['auhtor_name', 'content'];

    public function articles () {
        return $this->belongsTo(Article::class);
    }
    
}
