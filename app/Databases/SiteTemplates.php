<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;

class SiteTemplates extends Model
{
    protected $fillable = ['title', 'layout_id', 'slug', 'author', 'updated_at'];
    protected $table = 'site_templates';


}
