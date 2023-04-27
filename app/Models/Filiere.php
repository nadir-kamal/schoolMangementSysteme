<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'type',
    ];

    public function classes()
    {
        return $this->hasMany(Classe::class);
    }
    public function getId()
    {
        return $this->attributes["id"];
    }
    public function setId($id)
    {
        return $this->attributes["id"] = $id;
    }public function getLibelle()
    {
        return $this->attributes["libelle"];
    }
    
    public function setLibelle($valeur)
    {
        return $this->attributes["libelle"] = $valeur;
    }
    
    public function getType()
    {
        return $this->attributes["type"];
    }
    
    public function setType($valeur)
    {
        return $this->attributes["type"] = $valeur;
    }
    
}
