<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'valeur',
        'date',
        'etudiant_id',
        'matiere_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
    public function getId()
    {
        return $this->attributes["id"];
    }
    public function setId($id)
    {
        return $this->attributes["id"] = $id;
    }
    public function getValeur()
{
    return $this->attributes["valeur"];
}

public function setValeur($valeur)
{
    return $this->attributes["valeur"] = $valeur;
}

public function getDate()
{
    return $this->attributes["date"];
}

public function setDate($date)
{
    return $this->attributes["date"] = $date;
}

}
