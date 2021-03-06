<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;

class Post extends Model
{

    protected $guarded = ['id', 'create_at', 'update_at'];

    use HasFactory;

    //relacion uno a muchos inversa
    public function user(){
    return $this->belongsTo(User::class);
    }

    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
