<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;

class SiteLayouts extends Model
{
    protected $table = 'layouts';
    protected $fillable = ['title', 'slug'];
}
