<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable =['title','excerpt','body' ];
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
// $fillable (yang boleh di isi manual sisanya otomatis)
// $guarded (yang tidak boleh di isi manual)