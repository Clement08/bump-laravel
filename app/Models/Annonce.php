<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'annonce_name',
        'annonce_infos',
        'annonce_email',
        'annonce_email',
        'annonce_numberphone',
        'annonce_prix',
        'annonce_image',
        'annonce_type',
        'annonce_pointure',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}