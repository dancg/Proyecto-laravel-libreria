<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Libro extends Model
{
    use HasFactory;
    protected $fillable=['titulo','resumen','pvp','stock','user_id'];
    //Ponemos la relación con Autor(user)
    public function user(){
        return $this->belongsTo(User::class);
    }
}
