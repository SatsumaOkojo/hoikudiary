<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'News';
    //  id
        protected $fillable = ['user_id', 'update_message'];
    
        protected $guarded = ['created_at', 'updated_at'];
    use HasFactory;
}
