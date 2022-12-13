<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactCompany extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'identification', 'contact_general_id', 'email', 'extra' , 'choices'];

    public $timestamps = false;

    public function general()
    {
        return $this->belongsTo(ContactGeneral::class , 'contact_general_id');
    }
}
