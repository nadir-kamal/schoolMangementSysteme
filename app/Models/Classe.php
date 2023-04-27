<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'niveau', 'enseignantPrincipalId'];


    public function enseignantPrincipal()
    {
        return $this->belongsTo(Enseignant::class, 'enseignant_principal_id');
    }
    public function getId()
    {
        return $this->attributes["id"];
    }
    public function setId($valeur)
    {
        return $this->attributes["id"] = $valeur;
    }
    public function getNom()
    {
        return $this->attributes["nom"];
    }
    public function setNom($valeur)
    {
        return $this->attributes["nom"] = $valeur;
    }
    public function getNiveau()
    {
        return $this->attributes["niveau"];
    }
    public function setNiveau($valeur)
    {
        return $this->attributes["niveau"] = $valeur;
    }
    public function getEnseignantPrincipalId()
    {
        return $this->attributes["enseignantPrincipalId"];
    }
    public function setEnseignantPrincipalId($valeur)
    {
        return $this->attributes["enseignantPrincipalId"] = $valeur;
    }
}
