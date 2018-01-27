<?php

namespace Charlie;

use Illuminate\Database\Eloquent\Model;
use \Charlie\Purchase;

class Customer extends Model
{
    public function purchases(){
        return $this->hasMany(Purchase::class);
    }

    protected $casts =[
        'special_customer' => 'boolean',
        'birthdate' => 'date'
    ];

    protected $fillable = ['name','city','state','birthdate','special_customer'];
}
