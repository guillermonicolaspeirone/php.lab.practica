<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{

    protected $table = 'reviews';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Game_id',
        'Raiting',
        'Comment',
        'Submit_date' ,
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
    
    public $timestamps = false;

}
