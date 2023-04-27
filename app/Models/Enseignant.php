<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'adresse',
        'telephone',
        'email',
        'numero_identification',
        'classe_id',
        'matiere_id',
    ];

    public function getId()
    {
        return $this->attributes["id"];
    }
    public function setId($id)
    {
        return $this->attributes["id"] = $id;
    } public function getNom()
    {
        return $this->attributes["nom"];
    }
    public function setNom($valeur)
    {
        return $this->attributes["nom"] = $valeur;
    } 

    public function getPrenom()
    {
        return $this->attributes["prenom"];
    }
    
    public function setPrenom($valeur)
    {
        return $this->attributes["prenom"] = $valeur;
    }
    
    public function getDateNaissance()
    {
        return $this->attributes["date_naissance"];
    }
    
    public function setDateNaissance($valeur)
    {
        return $this->attributes["date_naissance"] = $valeur;
    }
    
    public function getAdresse()
    {
        return $this->attributes["adresse"];
    }
    
    public function setAdresse($valeur)
    {
        return $this->attributes["adresse"] = $valeur;
    }
    
    public function getTelephone()
    {
        return $this->attributes["telephone"];
    }
    
    public function setTelephone($valeur)
    {
        return $this->attributes["telephone"] = $valeur;
    }
    
    public function getEmail()
    {
        return $this->attributes["email"];
    }
    
    public function setEmail($valeur)
    {
        return $this->attributes["email"] = $valeur;
    }
    
    public function getNumeroIdentification()
    {
        return $this->attributes["numero_identification"];
    }
    
    public function setNumeroIdentification($valeur)
    {
        return $this->attributes["numero_identification"] = $valeur;
    }
    
    public function getClasseId()
    {
        return $this->attributes["classe_id"];
    }
    
    public function setClasseId($valeur)
    {
        return $this->attributes["classe_id"] = $valeur;
    }
    
    public function getMatiereId()
    {
        return $this->attributes["matiere_id"];
    }
    
    public function setMatiereId($valeur)
    {
        return $this->attributes["matiere_id"] = $valeur;
    }
}
