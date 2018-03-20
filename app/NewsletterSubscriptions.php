<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriptions extends Model
{
    protected $table = 'newsletter_subscription';
    public $timestamps = false;
}
