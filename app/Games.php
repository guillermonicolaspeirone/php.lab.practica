<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{

    protected $table = 'Games';
    
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

    protected $guarded = ['id'];

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
    
}
?>