<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model

{
    
    protected $table = 'Productos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Type',
        'ProductName',
        'ProductBrand',
        'Value' ,
        'Stock' ,
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [  
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    public $timestamps = false;
}
?>