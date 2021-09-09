<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table ="articles";

    protected $fillable = ['nom','description','date','user_id'];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

}
