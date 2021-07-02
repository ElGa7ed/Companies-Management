<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company_id',
        'phone',
    ];

    protected $hidden = ['company_id'];

    public function scopeSelection($query)
    {
        return $query->select(
            'id', 
            'first_name',
            'last_name',
            'email',
            'company_id',
            'phone',
        );
    }

    public function company()
    {

        return $this->belongsTo('App\Models\Company', 'company_id', 'id');
    }

}
