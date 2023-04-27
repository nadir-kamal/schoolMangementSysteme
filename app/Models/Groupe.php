<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'annee_scolaire',
        'nb_etudiants',
        'classe_id',
        'enseignant_id',
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class);
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

public function setNom($valeur)
{
    return $this->attributes["nom"] = $valeur;
}

public function getAnneeScolaire()
{
    return $this->attributes["annee_scolaire"];
}

public function setAnneeScolaire($valeur)
{
    return $this->attributes["annee_scolaire"] = $valeur;
}

public function getNbEtudiants()
{
    return $this->attributes["nb_etudiants"];
}

public function setNbEtudiants($valeur)
{
    return $this->attributes["nb_etudiants"] = $valeur;
}

public function getClasseId()
{
    return $this->attributes["classe_id"];
}

public function setClasseId($valeur)
{
    return $this->attributes["classe_id"] = $valeur;
}

public function getEnseignantId()
{
    return $this->attributes["enseignant_id"];
}

public function setEnseignantId($valeur)
{
    return $this->attributes["enseignant_id"] = $valeur;
}

}
