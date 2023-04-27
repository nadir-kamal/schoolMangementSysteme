<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
        'filiere_id',
    ];
    
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }  
    
    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    
    public function getId()
    {
        return $this->attributes["id"];
    }
    
    public function setId($id)
    {
        return $this->attributes["id"] = $id;
    }
    
    public function getNom()
    {
        return $this->attributes["nom"];
    }
    
    public function setNom($nom)
    {
        return $this->attributes["nom"] = $nom;
    }
    
    public function getPrenom()
    {
        return $this->attributes["prenom"];
    }
    
    public function setPrenom($prenom)
    {
        return $this->attributes["prenom"] = $prenom;
    }
    
    public function getDateNaissance()
    {
        return $this->attributes["date_naissance"];
    }
    
    public function setDateNaissance($date_naissance)
    {
        return $this->attributes["date_naissance"] = $date_naissance;
    }
    
    public function getAdresse()
    {
        return $this->attributes["adresse"];
    }
    
    public function setAdresse($adresse)
    {
        return $this->attributes["adresse"] = $adresse;
    }
    
    public function getTelephone()
    {
        return $this->attributes["telephone"];
    }
    
    public function setTelephone($telephone)
    {
        return $this->attributes["telephone"] = $telephone;
    }
    
    public function getEmail()
    {
        return $this->attributes["email"];
    }
    
    public function setEmail($email)
    {
        return $this->attributes["email"] = $email;
    }
    
    public function getNumeroIdentification()
    {
        return $this->attributes["numero_identification"];
    }
    
    public function setNumeroIdentification($numero_identification)
    {
        return $this->attributes["numero_identification"] = $numero_identification;
    }
}
