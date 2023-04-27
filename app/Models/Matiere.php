<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'coefficient',
        'enseignant_id',
    ];

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    } public function getId()
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

public function getCoefficient()
{
    return $this->attributes["coefficient"];
}

public function setCoefficient($valeur)
{
    return $this->attributes["coefficient"] = $valeur;
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
