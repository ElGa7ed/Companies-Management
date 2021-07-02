<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
    ];

    public function scopeSelection($query)
    {
        return $query->select(
            'id', 
            'name',
            'email',
            'logo',
        );
    }


    public function getLogoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }

    public function employees(){

        return $this -> hasMany('App\Models\Employee','company_id','id');
    }

}
