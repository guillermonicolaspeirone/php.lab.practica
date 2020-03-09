<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Genere',
        'Name',
        'Developer',
        'Status' ,
        'Value' ,
        'Published_at' ,
        'Contact_page' ,
        'img' ,
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