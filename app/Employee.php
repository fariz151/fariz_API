<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

     protected $table='employees';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pekerja', 'icno', 'nama', 'jawatan', 'unit'
    ];

   /* protected $fillable = [
        'name', 'email', 'github', 'twitter', 'location', 'latest_article_published'
    ];*/




    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}