<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'justifiee',
        'etudiant_id',
        'matiere_id',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
    public function getId()
    {
        return $this->attributes["id"];
    }
    public function setId($valeur)
    {
        return $this->attributes["id"] = $valeur;
    } public function getJustifiee()
    {
        return $this->attributes["justifiee"];
    }
    public function setJustifiee($valeur)
    {
        return $this->attributes["justifiee"] = $valeur;
    } public function getEtudiantId()
    {
        return $this->attributes["etudiant_id"];
    }
    public function setEtudiantId($valeur)
    {
        return $this->attributes["etudiant_id"] = $valeur;
    } public function getMatiereId()
    {
        return $this->attributes["matiere_id"];
    }
    public function setMatiereId($valeur)
    {
        return $this->attributes["matiere_id"] = $valeur;
    }
}
