<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $table ="commentaires";

    protected $fillable = ['contenu','article_id'];

    public function users(){
        return $this->belongsTo(Article::class);
    }

}
