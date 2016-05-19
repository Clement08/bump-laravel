<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'customer_infos',
        'customer_adress',
        'customer_email',
        'customer_numberphone',
        'contact_infos',
        'contact_adress',
        'contact_email',
        'contact_numberphone',
        'identity_sheet',
        'project_type',
        'context',
        'request',
        'goals',
        'constraints',
        'user_id',
        'status'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}