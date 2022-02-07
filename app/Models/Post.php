<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    public $primary_key = 'id';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
