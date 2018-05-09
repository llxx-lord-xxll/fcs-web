<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;

class SitePages extends Model
{
    protected $table = 'site_pages';
    protected $fillable = ['meta_type','template_id','meta_key','meta_value'];


}
